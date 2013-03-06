
<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/settings/save">
<div class="row-fluid">
	<div class="span6">
		<h3 class="heading">Настройки</h3>
		<div class="tabbable tabbable-bordered">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#tab_br1">Основные</a></li>
				<li class=""><a data-toggle="tab" href="#tab_br2">Section 2</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab_br1" class="tab-pane active">
								
					<div class="formSep">
						<label>Название сайта</label>
						<input type="text" name="site_name" value="<?=$config->get('site_name');?>"/>
						<span class="help-inline">должно быть уникальным (a-z0-9_)</span>
					</div>
					<div class="formSep">
						<label>Заголовок по умолчанию</label>
						<input type="text" name="default_title" value="<?=$config->get('default_title');?>"/>
						<span class="help-inline">title главной страницы</span>
					</div>
					<div class="formSep">
						<label>Ящик для сообщений</label>
						<input type="text" name="email_messages" value="<?=$config->get('email_messages');?>"/>
						<span class="help-inline">для служебных сообщений </span>
					</div>
								
				</div>
				
				<div id="tab_br2" class="tab-pane">
					<div class="formSep">
						<label>Телефон</label>
						<input type="text" name="phone" value="<?=$config->get('phone');?>"/>
						<span class="help-inline">Контактный телефон</span>
					</div>
					<div class="row-fluid">
						<div class="span8">
							<label>Контактная информаци</label>
							<textarea name="contacts" id="txtarea_sp" cols="10" rows="3" class="span8"><?=$config->get('contacts');?></textarea>
						</div>
					</div>		
				</div>
	</div>
	
	<div class="form-actions">
					<button type="submit" class="btn btn-inverse">Сохранить</button>
					<button class="btn">Отмена</button>
	</div>
</div>	
</form>				