
<div class="top-table">
<a href="/cp/text/edit" class="bt green small">Добавить</a>
</div>

<div class="table-wrapper">
<table>
<thead>
    <tr>
    <th>Название</th>
    <th>Alias</th>
    </tr>
</thead>
<tbody>

<?php

foreach($data as $row)
{
?>
	<tr id="node-<?=$row->structure_id?>">
		<td class="context-menu-one" id="<?=$row->structure_id?>"><?=$row->structure->title?></td>
		<td><?=$row->structure->alias?></td>
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
				document.location.href='/cp/text/'+key+'/'+$(this).attr('id');
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
