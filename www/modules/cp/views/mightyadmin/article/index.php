
<div class="header-table">
<a href="/cp/article/edit" class="bt green small">Добавить</a>
	<?php
	foreach($themes as $theme){
	?>
	<a class="bt small" href="/cp/article/index/<?=$theme->id?>" <?=$theme->id == $curr ? 'style="font-weight:bold;"' : ''?>><?=$theme->title?></a> 
	<?php
	}
?>

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
		<td><span class="context-menu-one" id="<?=$row->structure_id?>"><?=$row->title?></span></td>
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
//		$("#tree-table").treeTable({
//			initialState:'expanded'
//		});
    
		$.contextMenu({
			selector: '.context-menu-one', 
			trigger: 'left',
			callback: function(key, options) {
			
				document.location.href='/cp/article/'+key+'/'+$(this).attr('id');
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
