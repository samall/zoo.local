
<form id="setting-edit" class="form_validation_ttip" method="post" name="setting-edit" action="/cp/catalog_template/save/<?=$edit->id?>">
<input type="hidden" name="scope" value="<?=$cat_id?>"/>

<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Элемент структуры</h2>
	<div class="collapse-bt"></div>
</header>
<div class="widget-section">
	<div class="content">
		
		<div class="field g2">
			<label>Название</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="title" value="<?=$edit->title?>"/>
			</div>
		</div>
		
		<div class="field g2">
			<label>Ед. измерения</label>
			<div class="entry">
				<input type="text" placeholder="Ед. измерения" name="measure" value="<?=$edit->measure?>"/>
			</div>
		</div>
		
		<div class="field g2">
				<label>Родительский узел</label>
				<div class="entry">
					<select name="parent_id">
						<?php
						foreach($tree as $row)
						{
						?>
							<option value="<?=$row->id?>" <?=($row->id == $edit->parent_id ) || (!empty($parent_id) && $row->id == $parent_id) ? 'selected="selected"' : ''?>>
								<?=str_repeat(".", $row->lvl-1)?><?=$row->title?></option>
						<?php
						}
						?>
					</select>
				</div>
		</div>

		<div class="field g2">
				<label>Видимость</label>
				<div class="entry list">
				<label><input type="checkbox" name="use_short" value="1" style="opacity: 0;" <?=$edit->use_short == 1 ? 'checked="checked"' : '' ?>> Использовать в кратко</label>
				</div>
			</div>
		
		<div class="cf"></div>
	</div>
	<footer class="pane">
			<a class="bt" href="javascript:$('#setting-edit').submit();">Сохранить</a>
	</footer>
</div>


</div>
</form>				
