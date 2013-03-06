<p class="title t">Профиль пользователя</p>
<div class="rainbow"></div>



<form class="form1" action="/user/lk/save_profile" method="post"  enctype="multipart/form-data">

<div class="user_data">
	<table>
		<tbody><tr>
						<td rowspan="7" class="row1">Ф.И.О.:<br><p style="text-align:right;">Моё фото:</p></td>
						<td rowspan="7" class="row2">
								<input type="text" name="name" value="<?=$edit->info->name?>">
								<div class="photo">
								
									<?php
									if($avatar_path){
									?>
										<img alt="" src="<?=$avatar_path?>" id="avatar-img"/>
										<a href="#" id="remove_avatar">(x) удалить</a>
									<?php
									}else{
									?>
										<input type="file" name="avatar" id="avatar" />
									<?php
									}
									?>
									
								</div>
							</td>
							<td class="row3">О себе:</td>
							<td class="row4">
								<textarea name="info"><?=$edit->info->info?></textarea>
								
							</td>
						</tr>
						<tr>
							<td class="row3">Телефон:</td>
							<td class="row4">
								<input type="text" value="<?=$edit->info->phone?>" name="phone">
								
							</td>
						</tr>
						<tr>
							<td class="row3">Доп. телефон:</td>
							<td class="row4">
								<input type="text" value="<?=$edit->info->phone2?>" name="phone2">
								
							</td>
						</tr>
						<tr>
							<td class="row3">Сайт:</td>
							<td class="row4">
								<input type="text" value="<?=$edit->info->site?>" name="site">
								
							</td>
						</tr>
						<tr>
							<td class="row3">Skype:</td>
							<td class="row4">
								<input type="text" value="<?=$edit->info->skype?>" name="skype">
								
							</td>
						</tr>
						<tr>
							<td class="row3">icq:</td>
							<td class="row4">
								<input type="text" value="<?=$edit->info->icq?>" name="icq">
								
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td class="row1">E-mail:</td>
							<td class="row2"><input type="text" name="email" value="<?=$edit->email?>"></td>
							<td rowspan="4" colspan="2" class="row4 captcha">
								<div class="captcha">
									<img alt="" src="/assets/images/captcha.jpg">
									<div class="reload"></div>
									<p>Введите проверочный код<sup>*</sup></p>
									<input type="text" name="captcha" value="">
								</div>
							</td>
						</tr>
						<tr>
							<td class="row1">Текущий пароль<sup>*</sup>:</td>
							<td class="row2"><input type="password" name="current_password" value=""></td>
						</tr>
						<tr>
							<td class="row1">Новый пароль<sup>*</sup>:</td>
							<td class="row2"><input type="password" name="new_password" value=""></td>
						</tr>
						<tr>
							<td class="row1">Повторите пароль<sup>*</sup>:</td>
							<td class="row2"><input type="password" name="repeat_password" value=""></td>
						</tr>
					</tbody></table>
					<div class="btn_center">
						<div class="btn1"><button type="submit"></button><span>СОХРАНИТЬ МОИ ДАННЫЕ</span></div>
					</div>
				</div>

</form>
