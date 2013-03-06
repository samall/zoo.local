
<p>
<a href="/cp/structure/edit" class="btn"><i class="splashy-contact_blue_new"></i> Добавить</a>
</p>


<table class="table table-striped table-bordered table-condensed" id="tree-table" data-provides="rowlink">
<thead>
    <tr>
    <th>Название</th>
    <th>Alias</th>
	<th>Параметры</th>
    <th>Создан</th>
    <th>Изменен</th>
    </tr>
</thead>
<tbody>

<?php

foreach($data as $row)
{
?>
	<tr id="node-<?=$row->id?>" <?=$row->parent_id == 0 ? '' : 'class="child-of-node-'.$row->parent .'"'?>>
		<td><span class="<?=$row->has_children()? 'folder': 'file'?> context-menu-one" id="<?=$row->id?>"><?=$row->title?></span></td>
		<td><?=$row->alias?></td>
		<td></td>
		<td><?=$row->created; ?></td>
		<td><?=$row->modify; ?></td>
	</tr>

<?php	
}
?>


</tbody>
</table>


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
				document.location.href='/cp/structure/edit/'+$(this).attr('id')+'?module='+key;
				//alert($(this).attr('id'));
			},
			items: {
				"add": {
					name: "Создать",
					icon: "edit",
					items: {
						"text/edit": {name: "Текстовый документ"},
						"news/add": {name: "Раздел новостей"}
					}
                
				},
				"edit": {name: "Изменить", icon: "edit"},
				"paste": {name: "Paste", icon: "paste"},
				"delete": {name: "Удалить", icon: "delete"},
			}
		});
    
		$('.context-menu-one').on('click', function(e){
		//	console.log('clicked', this);
		})
	
	});
				

</script>
