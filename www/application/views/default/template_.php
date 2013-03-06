<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domoportal</title>
	<link href="/assets/themes/default/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">

<a href="/auth">Регистрация</a>
<a href="/auth/remember">Забыл пароль?</a>

<a href="/auth/login">Вход в ЛК</a>

<?php
if($user){
?>
<p>Привет, <?=$user->username?> <a href="/auth/logout">Выйти</a> <a href="/user/lk">Кабинет</a></p>
<?php
}
?>

</div>

<!--End header-->
<div id="container">

<?= $content ?>

<div class="cleaner"></div>
</div>

<!--End Container-->
<div id="footer">

</div>
</body>
</html>
