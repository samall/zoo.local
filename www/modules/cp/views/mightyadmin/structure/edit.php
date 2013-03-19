<form id="structure-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/structure/save/<?=$edit->id?>">

<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Элемент структуры</h2>
	<nav class="buttons tabbed">
		<ul>
			<li class="active"><a href="#tab1">Основное</a></li>
			<li><a href="#tab2">Дополнительно</a></li>
		</ul>
	</nav>
	<div class="collapse-bt"></div>
</header>
<div class="widget-section">
	<div class="content">
		<section id="tab1">
			
			<div class="field g2">
				<label>Название</label>
				<div class="entry">
					<input type="text" placeholder="Название" name="title" value="<?=$edit->title?>"/>
				</div>
			</div>
			<div class="field g2">
				<label>Alias</label>
				<div class="entry">
					<input type="text" placeholder="Just an example" name="alias" value="<?=$edit->alias?>" />
				</div>
			</div>		

			<div class="field g2">
				<label>Родительский узел</label>
				<div class="entry">
					<select name="parent_id">
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
			</div>

			<div class="field g2">
				<label>Видимость <span>(состояния)</span></label>
				<div class="entry list">
				<label><input type="checkbox" name="shown" value="1" style="opacity: 0;" <?=$edit->shown == 1 ? 'checked="checked"' : '' ?>> Показывать в меню</label>
				<label><input type="checkbox" name="published" value="1" style="opacity: 0;" <?=$edit->published == 1 ? 'checked="checked"' : '' ?>> Показывать на сайте</label>			
				</div>
			</div>

	

			<div class="cf"></div>		
		</section>
		<section id="tab2">
			<div class="field g4">
				<label>Title</label>
				<div class="entry">
					<input type="text" name="seotitle" value="<?=$edit->seotitle?>" placeholder="SEO title">
				</div>
			</div>
			<div class="field g4">
				<label>Keywords</label>
				<div class="entry">
					<input type="text" name="keywords" value="<?=$edit->keywords?>" placeholder="SEO keywords">
				</div>
			</div>	
			<div class="field g4">
				<label>Description</label>
				<div class="entry">
					<textarea placeholder="SEO description" name="description" class="elastic" style="overflow: hidden;"><?=$edit->description?></textarea>
				</div>
			</div>	

			<div class="field g4">
				<label>Модуль *</label>
				<div class="entry">
					<input type="text" name="module" value="<?=$edit->module?>" placeholder="Module key" />
				</div>
			</div>	
			
			<div class="field g4">
				<label>Параметры *</label>
				<div class="entry">
					<input type="text" name="params" value="<?=$edit->params?>" placeholder="URI params" />
				</div>
			</div>	

			<div class="cf"></div>					
		</section>
	</div>
</div>
<footer class="pane">
	<a class="bt" href="javascript:$('#structure-edit').submit();">Сохранить</a>
</footer>
</div>

</form>












<?php
/*
?>



<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/structure/save/<?=$edit->id?>">
<div class="row-fluid">
		<div class="span8">
				<h3 class="heading">Редактирование меню</h3>
				<div class="tabbable tabbable-bordered">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Общие</a></li>
						<li><a href="#tab2" data-toggle="tab">Настройка страницы</a></li>
						<li><a href="#tab3" data-toggle="tab">Модуль</a></li>
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
			$('#editor').elrte(opts);
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
<?php
*/
?>

