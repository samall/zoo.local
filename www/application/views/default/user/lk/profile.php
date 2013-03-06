

<p class="title t">Профиль пользователя</p>
<div class="rainbow"></div>



<div class="vcard">
	<img class="thumbnail" src="http://www.placehold.it/80x80/EFEFEF/AAAAAA" alt="Avatar" />
	
	<ul>
		<li class="v-heading">
			Пользователь
		</li>
											<li>
												<span class="item-key">ФИО</span>
												<div class="vcard-item"><?=$user->info->name?></div>
											</li>
											<li>
												<span class="item-key">Юзернейм</span>
												<div class="vcard-item"><?=$user->username?></div>
											</li>
											<li>
												<span class="item-key">Email</span>
												<div class="vcard-item"><?=$user->email?></div>
											</li>
											<li>
												<span class="item-key">Компания</span>
												<div class="vcard-item"><?=$user->info->company?></div>
											</li>
											<li>
												<span class="item-key">Телефон</span>
												<div class="vcard-item"><?=$user->info->phone?></div>
											</li>
											<li>
												<span class="item-key">День рождения</span>
												<div class="vcard-item"><?=$user->info->birthday?></div>
											</li>
											<li>
												<span class="item-key">Зарегистрирован</span>
												<div class="vcard-item"><?=$user->info->created ? date('d.m.Y h:i', $user->info->created) : 'нет данных'?></div>
											</li>
											<li>
												<span class="item-key">Дополнительно</span>
												<div class="vcard-item">
													<?=$user->info->info?>
												</div>
											</li>
</ul>
<a href="/user/lk/edit_profile">Редактировать</a>
</div>
