
<p>
<a class="btn" href="/cp/user/edit"><i class="splashy-contact_blue_new"></i> Добавить</a>
</p>

<div class="pagination">
<?=$pagination->render();?>
</div>

<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<th>id</th>
			<th>Пользователь</th>
			<th>Email</th>
			<th width="100">Управление</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($list as $row)
	{
	?>
	
	<tr>
		<td><?=$row->id?></td>
		<td><a href="/cp/user/profile/<?=$row->id?>"><?=$row->username?></a></td>
		<td><?=$row->email?></td>
		<td align="center">
			<a href="/cp/user/edit/<?=$row->id?>" title="Изменить"><i class="splashy-contact_blue_edit"></i></a>
			<a href="/cp/user/delete/<?=$row->id?>" title="Удалить" class="delete"><i class="splashy-contact_blue_remove"></i></a>
			<a href="/cp/user/active/<?=$row->id?>" title="Состояние: неактивен"><i class="splashy-contact_<?=$row->active ? 'blue': 'grey' ?>"></i></a>
		</td>
	</tr>
	
	<?php
	}
	?>
	</tbody>
</table>

<div class="pagination">
<?=$pagination->render();?>
</div>
								
