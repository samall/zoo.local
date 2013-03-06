

<?php //////// Show Errors
if(!empty($errors)){
echo '<p>'.$message.'</p>';
	foreach($errors as $key=>$val){
		if($key == '_external') continue;
		echo '<span>'.$val.'</span><br />';
	}
}
?>


<form class="form1" action="/auth/create/" method="post">

<div class="user_data">
	<table>
		<tbody>
		<tr>
		<td class="row3">Логин:</td>
		<td class="row4">
			<input type="text" value="" name="username" />
		</td>
		</tr>
		<tr>
		<td class="row3">Email:</td>
		<td class="row4">
			<input type="text" value="" name="email" />
		</td>
		</tr>
		<tr>
			<td class="row3">Пароль:</td>
			<td class="row4">
				<input type="password" value="" name="password" />
			</td>
		</tr>
		<tr>
			<td class="row3">Пароль:</td>
			<td class="row4">
				<input type="password" value="" name="password_confirm" />
			</td>
		</tr>
		<tr>
			<td class="row1">С правилами ознакомлен:</td>
			<td class="row2"><input type="checkbox" name="accept" value="true" /></td>
		</tr>
		<tr>
			<td class="row1">&nbsp;</td>
			<td class="row2"><div class="btn1"><button type="submit"></button><span>ПРОДОЛЖИТЬ</span></div></td>
		</tr>
		</tbody></table>
</div>
</form>
