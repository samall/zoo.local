<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/user/save/<?=$edit->id?>">
<div class="row-fluid">
		<div class="span6">
				<h3 class="heading">Данные пользователя</h3>
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Учетная информация</a></li>
						<li><a href="#tab2" data-toggle="tab">Дополнительно</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="formSep">
								<label>Имя пользователя <span class="f_req">*</span></label>
								<input type="text" name="username" value="<?=$edit->username?>"/>
								<span class="help-inline">должно быть уникальным (a-z0-9_)</span>
							</div>
							<div class="formSep">
								<label>E-mail <span class="f_req">*</span></label>
								<input type="text" name="email" value="<?=$edit->email?>"/>
								<span class="help-inline">реальный адрес E-mail</span>
							</div>
							<div class="formSep">
								<label>Пароль <span class="f_req">*</span></label>
								<input type="password" name="password" value="" />
								<span class="help-inline">от 8 символов</span>
							</div>
							<div class="formSep">
								<label>Проверка пароля <span class="f_req">*</span></label>
								<input type="password" name="password_confirm" value="" />
								<span class="help-inline">пароль еще раз</span>
							</div>
							
							<div class="row-fluid">
								<label>Роли пользователя <span class="f_req">*</span></label>
								<select multiple="multiple" name="roles[]">
								<?php
								foreach($roles as $row)
								{
								?>
									<option value="<?=$row->id?>" <?=!empty($user_roles[$row->id]) ? 'selected' : ''?>><?=$row->name?></option>
								<?php
								}
								?>
								</select> 
								<span class="help-inline">Роль login обязательна. Для выбора нескольких ролей используйте Ctrl+MouseLeftClick</span>
							</div>
						</div>
<!-- Tab 2 optional params -->							
						<div class="tab-pane" id="tab2">
							<div class="formSep">
								<label>ФИО</label>
								<input type="text" name="name" value="<?=$edit->info->name?>" class="span8"/>
								<span class="help-inline">опционально</span>
							</div>
							<div class="formSep">
								<label>Компания</label>
								<input type="text" name="company" value="<?=$edit->info->company?>" class="span8"/>
								<span class="help-inline">опционально</span>
							</div>
							<div class="formSep">
								<label>Телефон</label>
								<input type="text" name="phone" value="<?=$edit->info->phone?>" class="span8"/>
								<span class="help-inline">опционально</span>
							</div>
							<div class="formSep">
								<label>День рождения</label>
								<input type="text" name="birthday" value="<?=$edit->info->birthday?>" class="span8"/>
								<span class="help-inline">опционально</span>
							</div>
							<div class="row-fluid">
								<div class="span8">
									<label>Дополнительно о пользователе</label>
									<textarea name="info" id="txtarea_sp" cols="10" rows="3" class="span8"><?=$edit->info->info?></textarea>
								</div>
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



