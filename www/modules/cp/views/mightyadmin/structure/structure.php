<div class="table-wrapper">
<table id="tree-table">
<thead>
    <tr>
    <th>Название</th>
	<th>Параметры</th>
    </tr>
</thead>
<tbody>

<?php
foreach($data as $row)
{
?>
	<tr id="node-<?=$row->id?>" <?=$row->parent_id == 0 ? '' : 'class="child-of-node-'.$row->parent .'"'?>>
		<td class="first"><span class="<?=$row->has_children()? 'folder': 'file'?> context-menu-one" id="<?=$row->id?>"><?=$row->title?></span></td>
		<td><?=$row->alias?></td>
	</tr>
<?php	
}
?>
</tbody>
</table>

</div>
<script>

	$(document).ready(function() {
		$("#tree-table").treeTable({
			initialState:'expanded'
		});
    
		$.contextMenu({
			selector: '.context-menu-one', 
			trigger: 'left',
			callback: function(key, options) {
				var m = "clicked: " + key;
				
				if(key == 'delete' && !confirm('Удалить навсегда?'))
				{
					return;
				}
				document.location.href='/cp/structure/'+key+'/'+$(this).attr('id');
			},
			items: {
			//	"add": {name: "Создать", icon: "add"},
				"edit": {name: "Изменить", icon: "edit"},
			//	"paste": {name: "Paste", icon: "paste"},
				"delete": {name: "Удалить", icon: "delete"},
			}
		});
    
		$('.context-menu-one').on('click', function(e){
			//console.log('clicked', this);
		})
	
	});
				

</script>

