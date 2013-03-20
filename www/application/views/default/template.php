<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="public">
<title>Макет</title>

<meta http-equiv="imagetoolbar" content="no">
<!--[if lte IE 6]><script type="text/javascript">var ie6=true;</script><![endif]-->

<script src="/assets/js/jquery.js" type="text/javascript"></script>
<script src="/assets/js/prettyphoto.js" type="text/javascript"></script>
<script src="/assets/js/script.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="/assets/themes/default/style.css">
<link rel="stylesheet" type="text/css" href="/assets/themes/default/prettyphoto.css">
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie.css">
<![endif]-->
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6.css">
<![endif]-->
</head>

<body>

<div id="page">
	<div id="header">
		<div class="wrapper">
			<a href="/" id="logo"><img src="/assets/themes/default/images/logo.png" alt="" style=""><!--[if lte IE 6]><img src="/assets/themes/default/images//spacer.gif" style="width:208px;height:120px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/logo.png', sizingMethod='scale');" alt=""><![endif]--></a>

			<div class="social">
				<a href="#" class="vk"></a>
				<a href="#" class="od"></a>
				<a href="#" class="fb"></a>
				<a href="#" class="tw"></a>
				<a href="#" class="lj"></a>
				<a href="#" class="me"></a>
				<a href="#" class="yq"></a>
			</div>

			<div class="offers_profile">
				<div class="offers">
					<div>
						<span class="title">ВСЕГО Предложений</span>
						<span class="numbers"><span class="left"></span>30 002 375<span class="right"></span></span>
					</div>
					<div>
						<span class="title">Сегодня добавлено</span>
						<span class="numbers"><span class="left"></span>4 781<span class="right"></span></span>
					</div>
				</div>
				<div class="profile">
					
				<?php
				if($user){
				?>
					
					<div class="left">
						<b class="name"><?=$user->username?></b>
						<span class="account">На счете: <b>0</b> руб.</span>
						<a href="#"><b>Пополнить счет</b></a>
						<a href="#">История</a>
					</div>
					<div class="right">
						<a class="right" href="/user/lk/profile">Личные данные</a>
						<a class="right" href="/user/board">Мои предложения</a>
						<a class="right" href="#">Избранное</a>

						<div class="button"><a href="/auth/logout">Выйти</a></div>
					</div>
				
				<?php
				}else{
				?>
				
					<form action="/auth/login/" method="post">
						<div class="login">
							<label for="profile_login">Логин</label>
							<input name="username" id="profile_login" type="text" value="" />
							<label for="profile_pass">Пароль</label>
							<input value="" name="password" id="profile_pass" type="password" />
							<button type="submit">ВОЙТИ</button>
						</div>
					</form>

					<div class="login_hrefs">
						<a href="/auth">Зарегистрироваться</a>
						<a href="#">Правила размещения</a>
						<a href="/auth/remember">Забыли пароль?</a>
					</div>
				<?php
				}
				?>
				</div>
			</div>

			<div class="clear"></div>

			<div class="main_menu">
				<ul class="auto_width">
				
					<?php $i=0;
					foreach($top_menu as $row){
					?>
					<li <?= $i==0 ? 'class="post_offer"' : ''?>><a href="/<?=$row->alias?>" <?=$_SERVER["REQUEST_URI"] == '/'.$row->alias ? 'class="active"': ''?>><?=$row->title?></a></li>
					<?php $i++;
					}
					?>

					<li class="helper"></li>
				</ul>
			</div>
		</div>

		<div class="menu">
			<ul>
				<li class="it_1"><a href="#" name="sell">Продать</a></li>
				<li class="it_2"><a href="#" name="buy">купить</a></li>
				<li class="it_3"><a href="#" name="lease">сдать</a></li>
				<li class="it_4"><a href="#" name="rend">снять</a></li>
			</ul>

			<div class="filters" name="sell">
				<form action="/" method="get">
					<table cellspacing="0">
						<tbody><tr>
							<td class="text">1. Населенный пункт:</td>
							<td>
								<select name="city">
									<option selected="selected" value="1">Москва</option>
									<option value="2">Москва2</option>
									<option value="3">Москва3</option>
									<option value="4">Москва4</option>
								</select>
								
								<select name="district">
									<option selected="selected" value="1">Все районы</option>
									<option value="2">Все районы2</option>
									<option value="3">Все районы3</option>
								</select>
								</td>
							<td class="text">Цена от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Тип недвижимости:</td>
							<td>
								<select name="property_type">
									<option selected="selected" value="1">Квартира</option>
									<option value="2">Квартира2</option>
									<option value="3">Квартира3</option>
								</select>
								<select name="house_type">
									<option selected="selected" value="1">(Выбрать тип дома)</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
									<option value="4">Значение 4</option>
								</select>
								
								</td>
							<td class="text">Пл. от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Кол-во комнат:</td>
							<td>
								<select style="display: none;" name="rooms_count">
									<option selected="selected" value="1">3 комнаты</option>
									<option value="2">4 комнаты</option>
									<option value="3">5 комнат</option>
								</select>
								</td>
							<td class="text"></td>
							<td></td>
							<td class="text"></td>
							<td></td>
						</tr>
					</tbody></table>
				</form>

				<div class="slide_up"></div>
			</div>

			<div class="filters" name="buy">
				<form action="/" method="get">
					<table cellspacing="0">
						<tbody><tr>
							<td class="text">2. Населенный пункт:</td>
							<td>
								<select style="display: none;" name="city">
									<option selected="selected" value="1">Москва</option>
									<option value="2">Москва2</option>
									<option value="3">Москва3</option>
									<option value="4">Москва4</option>
								</select>
								<select style="display: none;" name="district">
									<option selected="selected" value="1">Все районы</option>
									<option value="2">Все районы2</option>
									<option value="3">Все районы3</option>
								</select>
								</td>
							<td class="text">Цена от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Тип недвижимости:</td>
							<td>
								<select style="display: none;" name="property_type">
									<option selected="selected" value="1">Квартира</option>
									<option value="2">Квартира2</option>
									<option value="3">Квартира3</option>
								</select>
								<select style="display: none;" name="house_type">
									<option selected="selected" value="1">(Выбрать тип дома)</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
									<option value="4">Значение 4</option>
								</select>
								</td>
							<td class="text">Пл. от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Кол-во комнат:</td>
							<td>
								<select style="display: none;" name="rooms_count">
									<option selected="selected" value="1">3 комнаты</option>
									<option value="2">4 комнаты</option>
									<option value="3">5 комнат</option>
								</select>
								</td>
							<td class="text"></td>
							<td></td>
							<td class="text"></td>
							<td></td>
						</tr>
					</tbody></table>
				</form>

				<div class="slide_up"></div>
			</div>

			<div class="filters" name="lease">
				<form action="/" method="get">
					<table cellspacing="0">
						<tbody><tr>
							<td class="text">3. Населенный пункт:</td>
							<td>
							<select style="display: none;" name="city">
									<option selected="selected" value="1">Москва</option>
									<option value="2">Москва2</option>
									<option value="3">Москва3</option>
									<option value="4">Москва4</option>
								</select>
								<select style="display: none;" name="district">
									<option selected="selected" value="1">Все районы</option>
									<option value="2">Все районы2</option>
									<option value="3">Все районы3</option>
								</select>
								</td>
							<td class="text">Цена от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Тип недвижимости:</td>
							<td>
							<select style="display: none;" name="property_type">
									<option selected="selected" value="1">Квартира</option>
									<option value="2">Квартира2</option>
									<option value="3">Квартира3</option>
								</select>
								<select style="display: none;" name="house_type">
									<option selected="selected" value="1">(Выбрать тип дома)</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
									<option value="4">Значение 4</option>
								</select>
								</td>
							<td class="text">Пл. от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Кол-во комнат:</td>
							<td>
							<select style="display: none;" name="rooms_count">
									<option selected="selected" value="1">3 комнаты</option>
									<option value="2">4 комнаты</option>
									<option value="3">5 комнат</option>
								</select>
								</td>
							<td class="text"></td>
							<td></td>
							<td class="text"></td>
							<td></td>
						</tr>
					</tbody></table>
				</form>

				<div class="slide_up"></div>
			</div>

			<div class="filters" name="rend">
				<form action="/" method="get">
					<table cellspacing="0">
						<tbody><tr>
							<td class="text">4. Населенный пункт:</td>
							<td>
							<select style="display: none;" name="city">
									<option selected="selected" value="1">Москва</option>
									<option value="2">Москва2</option>
									<option value="3">Москва3</option>
									<option value="4">Москва4</option>
								</select>
							<select style="display: none;" name="district">
									<option selected="selected" value="1">Все районы</option>
									<option value="2">Все районы2</option>
									<option value="3">Все районы3</option>
								</select>
								</td>
							<td class="text">Цена от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Тип недвижимости:</td>
							<td>
							<select style="display: none;" name="property_type">
									<option selected="selected" value="1">Квартира</option>
									<option value="2">Квартира2</option>
									<option value="3">Квартира3</option>
								</select>
							<select style="display: none;" name="house_type">
									<option selected="selected" value="1">(Выбрать тип дома)</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
									<option value="4">Значение 4</option>
								</select>
								</td>
							<td class="text">Пл. от</td>
							<td><input type="text"></td>
							<td class="text">До</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="text">Кол-во комнат:</td>
							<td>
							<select style="display: none;" name="rooms_count">
									<option selected="selected" value="1">3 комнаты</option>
									<option value="2">4 комнаты</option>
									<option value="3">5 комнат</option>
								</select>
								</td>
							<td class="text"></td>
							<td></td>
							<td class="text"></td>
							<td></td>
						</tr>
					</tbody></table>
				</form>

				<div class="slide_up"></div>
			</div>

			<div class="btn1"><span>НАЙТИ</span></div>
		</div>
	</div>

	
	<div id="content">
		<div class="wrapper">
			
			<?php // PREMIUM TOP SECTION
			echo $premium_top;
			?>

			<div class="left">
		<!--		<p class="title t"><?=$title?></p>
	
				<div class="rainbow"></div>
				
				<div class="content">-->
				
				<?= $content ?>
					
		<!--		</div>-->
			</div>
			<div class="right">
			<?php // PREMIUM TOP SECTION
				echo $premium_right;
			?>
			</div>
			
			
			<div class="clear"></div>
		</div>
	</div>

	<div id="footer_emulation"></div>
</div>

<div id="footer">
	<div class="wrapper">
		<ul class="auto_width">
		<!--	<li class="first"><a href="#">Разместить предложение</a></li>
			<li><a href="#">Новости и статьи</a></li>
			<li><a href="#">Все предложения</a></li>
			<li><a href="#">Агентства и специалисты</a></li>
			<li><a href="#">Вопрос? Ответ!</a></li>
			<li><a href="#">Помощь</a></li>
			<li><a href="#">Реклама</a></li>
			<li><a href="#">Партнерам</a></li>
			<li><a href="#">Вакансии</a></li>-->
			
			
			<?php $i=0;
			foreach($footer_menu as $row){
			?>
			<li <?= $i==0 ? 'class="first"' : ''?>><a href="/<?=$row->alias?>"><?=$row->title?></a></li>
			<?php $i++;
			}
			?>
			

			<li class="helper"></li>
		</ul>

		<span class="copyright">© 2012 «ДомоПортал»&nbsp;&nbsp;Все права защищены</span>

		<div class="social">
			<a href="#" class="vk"></a>
			<a href="#" class="od"></a>
			<a href="#" class="fb"></a>
			<a href="#" class="tw"></a>
			<a href="#" class="lj"></a>
			<a href="#" class="me"></a>
			<a href="#" class="yq"></a>
		</div>

		<div class="counters">
			<div class="counter"><img src="/assets/images/counter.jpg" alt=""></div>
			<div class="counter"><img src="/assets/images/counter.jpg" alt=""></div>
			<div class="counter"><img src="/assets/images/counter.jpg" alt=""></div>
			<div class="counter"><img src="/assets/images/counter.jpg" alt=""></div>
		</div>
	</div>
</div>


<div qtip="0" class="qtip qtip-light" style="border-radius: 0pt 0pt 0pt 0pt; position: absolute; width: 150px; display: none; padding: 0px 0px 14px; top: -42px; left: 129.5px; z-index: 6000;"><div class="qtip-tip" dir="ltr" rel="bottomMiddle" style="position: absolute; height: 14px; width: 14px; margin: 0pt auto 0pt -7px; line-height: 0.1px; font-size: 1px; bottom: 0px; left: 50%;"><canvas height="14" width="14"></canvas></div>  <div class="qtip-wrapper" style="position: relative; overflow: hidden; text-align: left;"><div class="qtip-borderTop" dir="ltr" style="height: 5px; margin-left: 5px; line-height: 0.1px; font-size: 1px; padding: 0pt;"><div rel="topLeft" style="left:0; position:absolute; height:5px; width:5px; overflow:hidden; line-height:0.1px; font-size:1px"><canvas height="5" width="5" style="vertical-align: top"></canvas></div><div rel="topRight" style="right:0; position:absolute; height:5px; width:5px; overflow:hidden; line-height:0.1px; font-size:1px"><canvas height="5" width="5" style="vertical-align: top"></canvas></div><div class="qtip-betweenCorners" style="height:5px; width:140px; overflow:hidden; background-color:#dedede; line-height:0.1px; font-size:1px;"></div></div>    <div class="qtip-contentWrapper" style="overflow: hidden; background: none repeat scroll 0% 0% rgb(245, 245, 245); border-width: 0px 5px; border-style: solid; border-color: rgb(222, 222, 222); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; -moz-border-image: none;">       <div style="background: none repeat scroll 0% 0% rgb(245, 245, 245); color: rgb(140, 135, 135); overflow: hidden; text-align: center; padding: 5px;" class="qtip-content qtip-content">Домопортал</div></div><div class="qtip-borderBottom" dir="ltr" style="height: 5px; margin-left: 5px; line-height: 0.1px; font-size: 1px; padding: 0pt;"><div rel="bottomLeft" style="left:0; position:absolute; height:5px; width:5px; overflow:hidden; line-height:0.1px; font-size:1px"><canvas height="5" width="5" style="vertical-align: top"></canvas></div><div rel="bottomRight" style="right:0; position:absolute; height:5px; width:5px; overflow:hidden; line-height:0.1px; font-size:1px"><canvas height="5" width="5" style="vertical-align: top"></canvas></div><div class="qtip-betweenCorners" style="height:5px; width:140px; overflow:hidden; background-color:#dedede; line-height:0.1px; font-size:1px;"></div></div></div></div></body></html>
