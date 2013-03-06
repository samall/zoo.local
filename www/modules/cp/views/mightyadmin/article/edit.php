<form id="structure-edit" class="form_validation_ttip" method="post" enctype="multipart/form-data" name="user-edit" action="/cp/article/save/<?=$edit->id?>">

<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Статья</h2>
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
				<label>Категория</label>
				<div class="entry">
					<select name="structure_id">
						<?php
						foreach($struct as $row)
						{
						?>
							<option value="<?=$row->id?>" <?=$row->id == $edit->structure_id ? 'selected="selected"' : ''?>>
								<?=$row->title?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>

			<div class="field g2">
				<label>Дата публикации</label>
				<div class="entry with-icon">
					<span class="icon-wrapper">
						<i class="fugue-calendar"></i>
					</span>
					<input type="text" class="datepicker" name="pub_date" value="<?=$edit->pub_date?>"/><!-- insert class .inline if you want the datepicker awalys to appear -->
				</div>
			</div>
			<div class="field g2">
				<label>Изображение</label>
				<div class="entry">
					<input type="file" name="image" class="custom-file  {fileDefaultText: 'Attach a file', fileBtnText: 'click to load'}"/>
				</div>
			</div>

			<div class="field g2">
				<label>Видимость</label>
				<div class="entry list">
				<label><input type="checkbox" name="published" value="1" style="opacity: 0;" <?=$edit->published == 1 ? 'checked="checked"' : '' ?>> Показывать на сайте</label>			
				</div>
			</div>

			<div class="cf"></div>		
		</section>
	</div>
</div>

</div>



<div class="widget minimizable g4">
<header>
	<i class="icon-paper"><div class="shadow"></div></i>
	<div class="bg" style="height: 33px;"></div><h2>Текст статьи</h2>
	<div class="collapse-bt"></div>
</header>
	<div class="widget-section">
		<div class="content">
			
		<div class="field g4">
		<div class="entry">
			<textarea name="content" class="editor"><?=$edit->content?></textarea>
		</div>
	</div>
	<div class="cf"></div>						
		</div>
		<footer class="pane">
			<a class="bt" href="javascript:$('#structure-edit').submit();">Сохранить</a>
		</footer>
	</div>
</div>

