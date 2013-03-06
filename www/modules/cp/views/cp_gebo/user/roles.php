
<p>
<a class="btn" href="/cp/user/grants/edit_role"><i class="splashy-contact_blue_new"></i> Добавить</a>
</p>

<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<th>id</th>
			<th>Роль</th>
			<th>Описание</th>
			<th width="100">Управление</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($roles as $row)
	{
	?>
	<tr>
		<td><?=$row->id?></td>
		<td><?=$row->name?></td>
		<td><?=$row->description?></td>
		<td align="center">
			<?php
			if($row->name == 'login' || $row->name == 'admin'){ echo 'n/a';}
			else{
			?>
				<a href="/cp/user/grants/edit_role/<?=$row->id?>" title="Изменить"><i class="splashy-contact_blue_edit"></i></a>
				<a href="/cp/user/grants/delete/<?=$row->id?>" title="Удалить" class="delete"><i class="splashy-contact_blue_remove"></i></a>
			<?php
			}
			?>
		</td>
	</tr>
	
	<?php
	}
	?>
	</tbody>
</table>