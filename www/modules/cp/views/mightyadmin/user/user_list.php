
<div class="top-table">
<a href="/cp/user/edit" class="bt green small">Добавить</a>
</div>

<div class="table-wrapper">
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Пользователь</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($list as $row)
	{
	?>
	
	<tr>
		<td><?=$row->id?></td>
		<td class="context-menu-one" id="<?=$row->id?>"><?=$row->username?></td>
		<td><?=$row->email?></td>
		
	</tr>
	
	<?php
	}
	?>
	</tbody>
</table>
</div>


<div class="footer-table">
	<?=$pagination->render();?>
</div>
		

<script>

	$(document).ready(function() {
		//$("#tree-table").treeTable({
		//	initialState:'expanded'
		//});
    
		$.contextMenu({
			selector: '.context-menu-one', 
			trigger: 'left',
			callback: function(key, options) {
			
				document.location.href='/cp/user/'+key+'/'+$(this).attr('id');
			},
			items: {
				"edit": {name: "Изменить", icon: "edit"},
				"delete": {name: "Удалить", icon: "delete"},
			}
		});
		
		$('.context-menu-one').on('click', function(e){
		//	console.log('clicked', this);
		})
	});
</script>	
