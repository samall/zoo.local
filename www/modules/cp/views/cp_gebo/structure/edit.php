<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/structure/save/<?=$edit->id?>">
<div class="row-fluid">
		<div class="span8">
				<h3 class="heading">Редактирование меню</h3>
				<div class="tabbable tabbable-bordered">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Общие</a></li>
						<li><a href="#tab2" data-toggle="tab">Настройка страницы</a></li>
						<li><a href="#tab3" data-toggle="tab" class="module">Модуль</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="formSep">
								<label>Название <span class="f_req">*</span></label>
								<input type="text" class="span8" name="title" value="<?=$edit->title?>"/>
							</div>
							<div class="formSep">
								<label>Псевдоним <span class="f_req">*</span></label>
								<input type="text" class="span8" name="alias" value="<?=$edit->alias?>"/>
							</div>
							
							<div class="row-fluid">
								<label>Родительский узел <span class="f_req">*</span></label>
								<select name="parent_id" class="span8 uni_style">
								<?php
								foreach($struct as $row)
								{
								?>
									<option value="<?=$row->id?>" <?=$row->id == $edit->parent_id ? 'selected="selected"' : ''?>>
										<?=str_repeat("&nbsp;.", $row->lvl)?><?=$row->title?></option>
								<?php
								}
								?>
								</select> 
							</div>
							
							<div class="row-fluid">
								<label>Тип страницы <span class="f_req">*</span></label>
								<select name="module" class="span8 uni_style" id="module" >
									<option value="page/edit">Текст</option>
									<option value="news/settings">Новости</option>
									<option value="catalog/settings">Каталог</option>
								</select> 
							</div>
							
							<div class="row-fluid">
								<label class="checkbox">Показывать на сайте
								<input type="checkbox" name="uni_c1" value="option1" />
								</label>
								<label class="checkbox">Показывать в меню
								<input type="checkbox" name="uni_c1" value="option1" />
								</label>
							</div>

						</div>
<!-- Tab 2 optional params -->							
						<div class="tab-pane" id="tab2">
							<div class="formSep">
								<label>Title</label>
								<input type="text" class="span8" name="title" value="<?=$edit->title?>"/>
							</div>
							<div class="formSep">
								<label>Description</label>
								<textarea class="span8" rows="3" cols="10" id="description" name="description"></textarea>
							</div>
							<div class="formSep">
								<label>Keywords</label>
								<input type="text" class="span8" name="alias" value="<?=$edit->alias?>"/>
							</div>
						</div>
						
						<div class="tab-pane" id="tab3">
						<?=$module?>
						
						</div>
					</div>
				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-inverse">Сохранить и редактировать</button>
					<button class="btn">Отмена</button>
				</div>
		</div>
		
</form>





<script type="text/javascript" charset="utf-8">
		$().ready(function() {
			var opts = {
				cssClass : 'el-rte',
				// lang     : 'ru',
				height   : 450,
				toolbar  : 'complete',
			//	cssfiles : ['/js/elrte-1.3/css/elrte-inner.css']
			}


			$('.nav-tabs li > a').click(function(){

				if($(this).hasClass('module')){
					$('#tab3').show();
					$('#editor').elrte(opts);
				}

			});

			
		})
	</script>

<script>

$(function(){

	$('#module').change(function(){
	
		if($('#mod-tab').length > 0){
			$('#mod-tab').remove();
			$('#tab3').remove();
		}
		
		$('.nav-tabs').append( '<li id="mod-tab"><a href="#tab3" data-toggle="tab">'+$("#module option:selected").text()+'</a></li>' );
		$('.tab-content').append('<div class="tab-pane" id="tab3"></div>');
		
		$.post('/cp/'+$(this).val(), function(data){
			$('#tab3').append(data);
		});
		
		
	});



});


</script>

