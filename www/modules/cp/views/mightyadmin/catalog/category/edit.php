
<form id="category-edit" class="form_validation_ttip" method="post" name="category-edit" action="/cp/catalog_category/save/<?=$edit->id?>">


<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Категория</h2>
	<div class="collapse-bt"></div>
</header>
<div class="widget-section">
	<div class="content">
		
		<div class="field g4">
			<label>Название</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="name" value="<?=$edit->name?>"/>
			</div>
		</div>
		
		<div class="field g4">
			<label>Alias</label>
			<div class="entry">
				<input type="text" placeholder="Alias" name="alias" value="<?=$edit->alias?>"/>
			</div>
		</div>
		
		<div class="cf"></div>
	</div>
	<footer class="pane">
			<a class="bt" href="javascript:$('#category-edit').submit();">Сохранить</a>
	</footer>
</div>


</div>
</form>				