
<div class="top-table">
<a href="/cp/catalog_category/edit" class="bt green small">Добавить</a>
</div>

<div class="table-wrapper">
<table>
<thead>
    <tr>
    <th>Название</th>
	<th>Alias</th>
	<th>Парамерты</th>
    </tr>
</thead>
<tbody>

<?php

foreach($data as $row)
{
?>
	<tr id="node-<?=$row->id?>">
		<td class="context-menu-one" id="<?=$row->id?>"><?=$row->name?></td>
		<td><?=$row->alias?></td>
		<td><a href="/cp/catalog_category/parameters/<?=$row->id?>">настроить</a></td>
	</tr>

<?php	
}
?>


</tbody>
</table>
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
				if(key == 'delete' && !confirm('Удалить навсегда?'))
				{
					return;
				}
				document.location.href='/cp/catalog_category/'+key+'/'+$(this).attr('id');
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
