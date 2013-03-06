
<?php //////// Show Errors
if(!empty($errors)){
echo '<p>'.$message.'</p>';
	foreach($errors as $key=>$val){
		if($key == '_external') continue;
		echo '<span>'.$val.'</span><br />';
	}
}
?>


<form class="form1" action="/auth/remember/" method="post">
	
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
			<td class="row1">&nbsp;</td>
			<td class="row2"><div class="btn1"><button type="submit"></button><span>ПРОДОЛЖИТЬ</span></div></td>
		</tr>
		</tbody></table>
</div>

</form>
