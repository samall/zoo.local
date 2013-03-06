
<form id="setting-edit" class="form_validation_ttip" method="post" name="setting-edit" action="/cp/settings/save">


<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Элемент структуры</h2>
	<div class="collapse-bt"></div>
</header>
<div class="widget-section">
	<div class="content">
		
		<div class="field g4">
			<label>Название сайта</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="site_name" value="<?=$config->get('site_name');?>"/>
			</div>
		</div>
		
		<div class="field g4">
			<label>Заголовок по умолчанию</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="default_title" value="<?=$config->get('default_title');?>"/>
			</div>
		</div>
		
		<div class="field g4">
			<label>Ящик для сообщений</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="email_messages" value="<?=$config->get('email_messages');?>"/>
			</div>
		</div>
		
		<div class="field g4">
			<label>Телефон</label>
			<div class="entry">
				<input type="text" placeholder="Название" name="phone" value="<?=$config->get('phone');?>"/>
			</div>
		</div>
		
		<div class="field g4">
			<label>Контакты</label>
			<div class="entry">
				<textarea name="contacts" id="txtarea_sp" cols="10" rows="3" class="span8"><?=$config->get('contacts');?></textarea>
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