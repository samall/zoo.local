<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/user/save/<?=$edit->id?>">

<div class="widget minimizable g4">
<header>
	<i class="icon-tab"></i>
	<h2>Пользователь</h2>
	<nav class="buttons tabbed">
		<ul>
			<li class="active"><a href="#tab1">Учетная информация</a></li>
			<li><a href="#tab2">Дополнительно</a></li>
		</ul>
	</nav>
	<div class="collapse-bt"></div>
</header>
<div class="widget-section">
	<div class="content">
		<section id="tab1">
			
			<div class="field g2">
				<label>Имя пользователя</label>
				<div class="entry">
					<input type="text" placeholder="Название" name="username" value="<?=$edit->username?>"/>
				</div>
			</div>
			<div class="field g2">
				<label>Email</label>
				<div class="entry">
					<input type="text" placeholder="Just an example" name="email" value="<?=$edit->email?>"/>
				</div>
			</div>		
			
			
			<div class="field g2">
				<label>Пароль</label>
				<div class="entry">
					<input type="text" placeholder="Just an example" name="password" value=""/>
				</div>
			</div>		
			
			<div class="field g2">
				<label>Повтор пароля</label>
				<div class="entry">
					<input type="text" placeholder="Just an example" name="password_confirm" value=""/>
				</div>
			</div>		

			

			<div class="field g2">
				<label>Роли пользователя <span>login - обязательно</span></label>
				<div class="entry">
				<select multiple="multiple" name="roles[]" class="chosen chzn-done">
					<?php
					foreach($roles as $row)
					{
					?>
						<option value="<?=$row->id?>" <?=!empty($user_roles[$row->id]) ? 'selected' : ''?>><?=$row->name?></option>
					<?php
					}
					?>
				</select> 
				</div>
			</div>


			<div class="cf"></div>		
		</section>
		<section id="tab2">
			<div class="field g1">
				<label>ФИО</label>
				<div class="entry">
					<input type="text" name="name" value="<?=$edit->info->name?>" />
				</div>
			</div>
			<div class="field g1">
				<label>День Рождения</label>
				<div class="entry">
						<div class="entry with-icon">
							<span class="icon-wrapper">
								<i class="fugue-calendar"></i>
							</span>
							<input type="text" class="datepicker" name="birthday"  value="<?=$edit->info->birthday?>"/><!-- insert class .inline if you want the datepicker awalys to appear -->
						</div>
				</div>
			</div>
			<div class="field g2">
				<label>Компания</label>
				<div class="entry">
					<input type="text" name="company" value="<?=$edit->info->company?>" />
				</div>
			</div>	
			<div class="field g2">
				<label>Телефон</label>
				<div class="entry">
					<input type="text" name="phone" value="<?=$edit->info->phone?>" />
				</div>
			</div>	
			<div class="field g2">
				<label>Телефон <span>(дополнительный)</span></label>
				<div class="entry">
					<input type="text" name="phone" value="<?=$edit->info->phone2?>" />
				</div>
			</div>	
			
			
			<div class="field g1">
				<label>ICQ</label>
				<div class="entry">
					<input type="text" name="phone" value="<?=$edit->info->icq?>" />
				</div>
			</div>	
			<div class="field g1">
				<label>Skype</label>
				<div class="entry">
					<input type="text" name="phone" value="<?=$edit->info->skype?>" />
				</div>
			</div>	
			<div class="field g2">
				<label>Сайт</label>
				<div class="entry">
					<input type="text" name="phone" value="<?=$edit->info->site?>" />
				</div>
			</div>	
			
			
			<div class="field g4">
				<label>Дополнительно</label>
				<div class="entry">
					<textarea name="info" id="txtarea_sp" cols="10" rows="3" class="span8"><?=$edit->info->info?></textarea>
				</div>
			</div>		

			<div class="cf"></div>					
		</section>
	</div>
	<footer class="pane">
		<a class="bt" href="javascript:$('#user-edit').submit();">Сохранить</a> 
		<a class="bt black" href="javascript:$('#user-edit').cancel();">Сохранить</a>
	</footer>
</div>
</div>

</form>



