
<?php //////// Show Errors
if(!empty($error)){
echo '<p>'.$error.'</p>';
}
?>

<form class="form1" action="/auth/login/" method="post">

<div class="user_data">
	<table>
		<tbody>
		<tr>
		<td class="row3">Пользователь:</td>
		<td class="row4">
			<input type="text" value="" name="username">
		</td>
		</tr>
		<tr>
			<td class="row3">Пароль:</td>
			<td class="row4">
				<input type="password" value="" name="password">
			</td>
		</tr>
		<tr>
			<td class="row1">Запомнить меня:</td>
			<td class="row2"><input id="rem" name="remember_me" value="1" type="checkbox" /></td>
		</tr>
		<tr>
			<td class="row1">&nbsp;</td>
			<td class="row2"><div class="btn1"><button type="submit"></button><span>ВОЙТИ</span></div></td>
		</tr>
		</tbody></table>
</div>
</form>

<div class="login_hrefs" align="center">
						<a href="/auth">Зарегистрироваться</a> 
						<a href="#">Правила размещения</a> 
						<a href="/auth/remember">Забыли пароль?</a> 
					</div>
