//Удалить return из 174 строки, для отправки формы с фильтрами

var ie6 = ie6===undefined ? false : ie6;
/*  слайдер  */
(function($) {
	$.fn.slider = function(options){
		this.each(function(){
			var options = jQuery.extend({
				speed:1000,
				slides:4,
				auto:3000,//false или время
				mousewheel:false//true для mousewheel, плагин в этом случае должен быть подключен
			}, options);

			var ul = $(this).find("ul");
			var slides = ul.find("li");
			var prev_btn = $(this).find(".l_arrow");
			var next_btn = $(this).find(".r_arrow");

			var curr_slide = 0;
			var all_slides = slides.length;

			if(slides.length<=options.slides){
				return;
			}

			var disable_auto = false;

			function startAnimation(){
				var left = slides.eq(curr_slide).position().left-slides.eq(0).position().left;
				ul.stop().animate({left:-left},options.speed);
			}

			function prev(){
				curr_slide--;
				curr_slide = curr_slide>=0 ? curr_slide : all_slides-options.slides;
				startAnimation();
			}

			function next(auto){
				if(auto===true && disable_auto===true){
					return false;
				}
				curr_slide++;
				curr_slide = curr_slide+options.slides<=all_slides ? curr_slide : 0;
				startAnimation();
			}

			$(this).on("mouseenter",function(){
				disable_auto = true;
			}).on("mouseleave",function(){
				disable_auto = false;
			});

			if(options.mousewheel==true){
				$(this).on("mousewheel",function(event, delta){
					if(delta===-1){
						next();
					}else if(delta===1){
						prev();
					}
					return false;
				});
			}

			next_btn.on("click",function(){
				next();
			});

			prev_btn.on("click",function(){
				prev();
			});

			ul.css({position:"relative",left:"0px"});

			if(options.auto!==false){
				setInterval(function(){
					next(true);
				}, options.auto);
			}

			return this;
		});
		return this;
	}
})(jQuery);

$(function(){
	var selenter = false;
	$(document).on("mouseenter",".select_wrapper",function(){
		selenter = true;
	}).on("mouseleave",".select_wrapper",function(){
		selenter = false;
	});

	var sel_open = false;
	$(document).on("click",".select",function(){
		var options = $(this).next();
		if(options.is(":visible")){
			sel_open = false;
			options.stop().slideUp(200);
		}else{
			sel_open = true;
			$(".option_wrapper").stop().slideUp(200);
			options.stop().slideDown(200);
		}
	}).on("click",".option",function(){
		var parent = $(this).parent();
		parent.prev().find(".selected_text").text($(this).text());
		parent.parent().find("select option").eq($(this).prevAll(".option").length).attr("selected","selected");
		sel_open = false;
		parent.stop().slideUp(200);
	});

	$(document).on("click",function(){
		if(selenter==false && sel_open==true){
			$(".option_wrapper").stop().slideUp(200);
		}
	});

	$("select").each(function(){
		var parent = $(this).wrap($("<div/>",{'class':'select_wrapper'})).css("display","none").parent();
		$("<div/>",{'class':"select",html:'<div class="selected_text">'+$(this).find("option:selected").text()+'</div><div class="arrow"></div>'}).appendTo(parent);
		$("<div/>",{'class':"option_wrapper"}).appendTo(parent);
		var options_wrapper = parent.find(".option_wrapper");
		$(this).find("option").each(function(){
			$("<div/>",{'class':"option",text:$(this).text()}).appendTo(options_wrapper);
		});
	});

	/*  сделать стилизованными все input checbox  */
	$("input:checkbox").checkbox();
	
	/*  сделать стилизованными все input radio  */
	$("input:radio").radio();

	/*  сделать стилизованными все input file  */
	$("input:file").each(function(){
		var input = $(this).wrap("<div class=\"file_wrapper\"><div class=\"load_file\"></div></div>");
		var text_val = $("<div/>",{'class':'file_address',html:'<input type="text" value="'+$(this).val()+'" disabled="disabled">'}).insertBefore(input.parent());
		input.on("change",function(){
			text_val.find("input:text").val($(this).val());
		});
		text_val.on("mouseup","input:text",function(){
			input.trigger("click");
		});
	});
	
	/*  ограничение вводимых символов textarea  */
	$("textarea[maxlength]").on("keydown change",function(){
		var val = $(this).val();
		var maxlength = $(this).attr("maxlength");
		if(val.length>maxlength){
			$(this).val(val.substr(0,maxlength));
		}
	});
	
	/*  "Количество" input поле с кнопками плюс/минус   */
	$("input.count").each(function(){
		var input = $(this).wrap("<div class=\"count\"></div>");
		$("<div/>",{'class':"fl_l",html:'<div class="count_plus"></div><div class="count_min"></div>'}).insertAfter(input);
	});
	
	/*  кнопка вкл/выкл  */
	$(".on_off").each(function(){
		var curr_val = $(this).attr("value");
		if(!!curr_val && curr_val!=="0"){
			$(this).addClass("on").attr("value",1);
		}else{
			$(this).attr("value",0);
		}
		
		$(this).on("click",function(){
			var curr_val = $(this).attr("value");
			if(!!curr_val){
				$(this).removeClass("on").attr("value",0);
			}else{
				$(this).addClass("on").attr("value",1);
			}
		});
	});
	
	$(document).on("click", ".count .count_plus, .count .count_min", function(){
		var inp = $(this).parent().prev();
		var quantity_input = inp.val();
		quantity_input = !isNaN(quantity_input) ? quantity_input : 1;
		var quantity = quantity_input;
		if($(this).is(".count_plus")){
			quantity_input++;
		}else if($(this).is(".count_min")){
			quantity_input--;
		}
		if(quantity!=quantity_input){
			inp.val(quantity_input).trigger("change");
		}
	});

	/*  закрыть popup  */
	$(document).on("click",".popup .close >",function(e){
		e.preventDefault();
		$(".popup").css("display","none");
	});

	/*  ПРОДАТЬ КУПИТЬ СДАТЬ СНЯТЬ  */
	
	$("#header .menu ul").on("click","a",function(e){
		e.preventDefault();
		var menu = $(this).closest(".menu");
		var filters = menu.find(".filters[name='"+$(this).attr("name")+"']");
		if(filters.is(".open")){
			return;
		}else{
			menu.find("ul .active").removeClass("active");
			$(this).addClass("active");

			var open_filters = filters.siblings(".filters.open");
			if(open_filters.length>0){
				open_filters.removeClass("open");
				filters.addClass("open");
			}else{
				filters.addClass("open").css({display:"none"}).slideDown(750,function(){
					$(this).css({display:"",overflow:""});
				});
			}
		}
	});

	$("#header .menu .slide_up").on("click",function(){
		var filters_div = $(this).parent();
		filters_div.slideUp(750,function(){
			filters_div.removeClass("open").css("display","");
		});
	});

	$("#header .menu .btn1").on("click",function(){
		var menu = $(this).parent();
		active_menu = menu.find("ul li a.active");
		var filters = menu.find(".filters[name='"+active_menu.attr("name")+"']");
		if(filters.is(".open")){
			return;
			filters.find("form").submit();
		}else{
			active_menu.click();
		}
	});

	/*  логин, пароль в шапке  */
	$("#header .profile .login").on("focus", "input", function(){
		var label = $(this).prev("label");
		if(label.length>0){
			label.css("display","none");
		}
	}).on("blur", "input", function(){
		var val = $.trim($(this).val());
		if(val===""){
			var label = $(this).prev("label");
			if(label.length>0){
				label.css("display","");
			}
		}
	});

	/*  ВОПРОС-ОТВЕТ  */
	$(".help").on("click",".question",function(){
		var parent = $(this).parent();
		if(parent.is(".open")){
			$(this).next().stop().slideUp(500,function(){
				parent.css("display","").removeClass("open");
			});
		}else{
			$(this).next().stop().slideDown(500,function(){
				parent.css("display","").addClass("open");
			});
		}
	});

	/*  подключение лайтбокса  */
	$("#content a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',opacity: 0.70,show_title:true,theme:'pp_default', /* pp_default / light_rounded / dark_rounded / light_square / dark_square / facebook */deeplinking:false,overlay_gallery:true,allow_resize:true,social_tools:false});
	
	/*  подключение всплывающей подсказки  */
	$('[title],[alt]').filter("[alt!='']").filter("[title!='']").qtip({ 
		position: {
			corner:{
				target: 'topMiddle',
				tooltip: 'bottomMiddle'
			}
		},
		style:{
			name: 'light',
			width:150,
			padding: 5,
			background: '#f5f5f5',
			color: '#8c8787',
			textAlign: 'center',
			border:{
				width:1,
				radius:5,
				color:'#dedede'
			},
			tip: 'bottomMiddle',
		
		},
		width: {
			min:0,
			max:250
		}
	});
	
	/*  запуск слайдера  */
	$(".offers_slider").slider();
});