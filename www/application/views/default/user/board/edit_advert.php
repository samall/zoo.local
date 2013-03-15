<p class="title t">Редактирование предложения: д. Язово (Ленинский район)</p>
<div class="rainbow"></div>

<form action="/user/board/save/<?=$edit->id?>" method="post" enctype="multipart-form/data">
				<div class="create_offer">
					<table>
						<tr>
							<td class="row1">Тип сделки:
							</td>
							<td class="row2">
								<select name="type_deal">
									<option value="1">Продать</option>
									<option value="2">Купить</option>
								</select>
							</td>
							<td class="row3">Категория объекта:</td>
							<td class="row4">
								<select name="catalog_category_id" id="catalog_category">
									<option value="0">не выбрано</option>
									<?php
									foreach($catalog_category as $row)
									{ ?>
									<option value="<?=$row->id?>" <?=$edit->catalog_category_id == $row->id ? 'selected="selected"' : ''?>><?=$row->name?></option>
									<?php }
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="row1">Где:
							</td>
							<td class="row2">
								<input type="hidden" name="geo_region_id" value="<?=$edit->geo_region_id?>" id="region" />
								<a href="/user/board/regions/<?=$edit->geo_region_id?>" id="select-region"><?=$region['region'] ? $region['region'] .' <em>(изменить)</em>' : 'Выбрать регион'?></a>
								
							</td>
							<td class="row3"></td>
							<td class="row4">
								<label><input type="radio" name="condition" value="1"> в новостройке</label>
								<label><input type="radio" name="condition" value="2"> в строящемся</label>
							</td>
						</tr>
						<tr>
							<td class="row1">
							</td>
							<td class="row2">
								<input type="hidden" name="geo_city_id" value="<?=$edit->geo_city_id?>" id="subregion" />
								<a href="/user/board/subregions/" id="select-subregion" style="<?=$edit->geo_city_id ? '' : 'display:none;'?>"><?=$region['subregion'] ? $region['subregion'] . '<em>(изменить)</em>': 'Уточнить местоположение'?></a>
							</td>
							<td class="row3">Как далеко, км:</td>
							<td class="row4">
								<select name="remoteness">
									<option>От 01 до 10</option>
									<option>От 01 до 50</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="row1">Площадь:
							</td>
							<td class="row2 area" colspan="3">
								<input type="text" value="<?=$edit->square?>" name="square"> м<sup>2</sup>
							</td>
						</tr>
						<tr>
							<td class="row1">Заголовок предложения:
							</td>
							<td class="row2" colspan="3">
								<input type="text" value="<?=$edit->title?>" name="title" class="width_100">
							</td>
						</tr>
						<tr>
							<td class="row1">Описание предложения:
							</td>
							<td class="row2" colspan="3">
								<textarea cols="" rows="" name="description"><?=$edit->description?></textarea>
							</td>
						</tr>
						<tr>
							<td class="row1">Цена:
							</td>
							<td class="row2 price" colspan="3">
								<input type="text" value="<?=$edit->price?>" name="price">
								рублей
							</td>
						</tr>
						<tr>
							<td class="row1">Фотографии:<span class="l_gray">до 5 фотографий</span>
							</td>
							<td class="row2" colspan="3">
								<div id="upload-fields">
									<input type="file" name="image" id="first-upload" class="addfield" />
								
								</div>
								<div class="load_files" id="loaded-files">
								<?php 
								if(!empty($images)){
									foreach($images as $image) 
									{
								?>
									<div class="photo">
										<img src="<?=$edit->image_path . $image?>" alt="" />
										<a href="#" class="img-delete">(x) удалить</a>
									</div>
								
								<?php }
								}
								?>
								</div>
							</td>
						</tr>
						
						<tr>
						
						<td colspan="4">
						<div id="category_template">
						<?php
						if(!empty($template)){
						?>
							<table>
				<tbody>
		<?php

foreach($template as $d)
{
	if($d->lft == 1) continue;
?>
	<tr <?=($d->rgt-$d->lft>1) ? 'style="background:#f8f8f8;"': ''?>>
		<td  class="row1">
		<?php
		if($d->rgt-$d->lft>1)
		{ ?>
		<strong><?=$d->title?></strong>
		<?php 
		}else{
		?>
	 	<?=str_repeat('&nbsp;&nbsp;', $d->lvl)?><?=$d->title?>
		<?php
		}
		?>
		</td>
		<td  class="row2">
			<?php
			if($d->rgt-$d->lft==1)
			{ ?>
			<input type="text" name="param-<?=$d->id?>" value="" />
		<?php }?>
		</td>
    </tr>

<?php
	}
}
?>

</tbody>
</table>
						
						</div>
						</td>
						</tr>
						
						<tr>
							<td class="row1 b">Введите проверочный код:
							</td>
							<td class="row2 price" colspan="3">
								<div class="captcha">
									<img src="/assets/images/captcha.jpg" alt="">
									<div class="reload"></div>
									<input type="text" value="" name="">
								</div>
							</td>
						</tr>
					</table>
					<div class="btn_center">
						<div class="btn1"><button type="submit"></button><span>СОХРАНИТЬ МОИ ИЗМЕНЕНИЯ</span></div>
					</div>
				</div>
				</form>	
				
<script src="/assets/js/jquery.upload-1.0.2.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
	
		function ajax_popup(id)
		{
			var popup = '<div class="popup" id="'+id+'"><div class="center_outer"><div class="center_middle"><div class="center_inner"><div class="popup_wrapper"><div class="popup_content" id="'+id+'-content">';
			popup += '<div class="btn_center close"><a href="#" class="btn1"><span>ЗАКРЫТЬ</span></a></div></div></div></div></div></div></div>';
			var p = $(popup);
			p.prependTo('body');
		}
	
		function content(el, winid, input, container, callback)
		{
			$.post(el.attr('href'), function(res){
				$('#'+winid+'-content').prepend(res);
				$('#'+winid).show();
				$('#'+winid+'-content a').click(function(){
					
					var reg = $(this).attr('href');
					
					if(reg != '#'){
						$(input).val(reg);
						$(container).html($(this).text()+' <em>(изменить)</em>');
					}
					$('.popup').fadeOut();
					callback();
					return false;
				});
			}, 'html' );
		}
	
	
		$("#select-region").click(function(){
			var winid = 'win-region';
			ajax_popup(winid);
			content($(this), winid, '#region', '#select-region', function(){
				
				var href = $('#select-subregion').attr('href').substring(0, $('#select-subregion').attr('href').lastIndexOf('/')) +'/?region='+$('#region').val();
				
				$('#select-subregion').show();
				$('#select-subregion').attr('href', href);
				$('#select-subregion').text('Уточнить месторасположение');
				$('#subregion').val('0');
			});
			
			return false;
		});
		
		$("#select-subregion").click(function(){
			var winid = 'win-subregion';
			ajax_popup(winid);
			var href = $(this).attr('href').substring(0, $(this).attr('href').lastIndexOf('/')) +'/?region='+$('#region').val();
			$(this).attr('href', href);
			content($(this), winid, '#subregion', '#select-subregion', function(){
			
			});
			
			return false;
		});
	
	
		$(".img-delete").click(function(){
			var path = $(this).prev().attr('src');
			var parent = $(this).parent();
			$.post('/user/board/delete_image/', {"path": path, "id": <?=$edit->id ? $edit->id : 0 ?>}, function(res){
				parent.fadeOut();
				parent.remove();
			});
			return false;
		});
	
	
        $('#first-upload').change(function() {
            $(this).upload('/user/board/upload', function(res) {
			
				if(!res.error)
				{
					$("#loaded-files").append('<div class="photo"><img src="'+res.filename+'" alt="" /><a href="#" class="img-delete">(x) удалить</a></div>');
					$(".file_address input").val('');
					
					
				}else{
					alert(res.error);
				}
				
				$(".img-delete").click(function(){
					var path = $(this).prev().attr('src');
					var parent = $(this).parent();
					$.post('/user/board/delete_image/', {"path": path, "id": <?=$edit->id ? $edit->id : 0 ?>}, function(res){
						parent.fadeOut();
						parent.remove();
					});
					return false;
				});
				
				
            }, 'json');
        });
    });
</script>
