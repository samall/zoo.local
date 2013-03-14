<?php
if(!count($dataset)){
?>
<div class="top-table">
<a href="/cp/catalog_template/edit" class="bt green small">Добавить</a>
</div>
<?php
}
?>

<div class="table-wrapper">
<table>
<thead>
    <tr>
    <th>Название</th>
	<th>Ед. измерения</th>
	<th>Перемещение</th>
	<th>Показывать в кратко</th>
    </tr>
</thead>
<tbody>
<?php
foreach($dataset as $d)
{
	if($d->lft == 1) continue;
?>
	<tr>
		<td><span class="context-menu-one" id="<?=$d->id?>">
		<?php
		if($d->rgt-$d->lft>1)
		{ ?>
		<strong><?=$d->title?></strong>
		<?php 
		}else{
		?>
	 	<?=str_repeat('&nbsp;&nbsp;', $d->lvl)?><?=$d->title?>
		<?php
		}
		?></span>
		</td>
		<td>
		<?php
		if($d->rgt - $d->lft==1)
		{
			echo $d->measure;
		} 
		?>
		</td>
		<td>
			<a href="/<?=$d->id;?>">Вверх</a> | 
			<a href="/<?=$d->id;?>">Вниз</a>
		</td>
		<td>
		<?php
		if($d->rgt - $d->lft==1)
		{ ?>
			<a href="/cp/catalog_template/use_short/<?=$d->id?>"><?=$d->use_short==0 ? 'Да' : '<font color="#ff0000">Нет</font>'?></a>
		<?php 
		} ?>
		</td>
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
				document.location.href='/cp/catalog_template/'+key+'/'+$(this).attr('id');
			},
			items: {
				"add": {name: "Добавить", icon: "add"},
				"edit": {name: "Изменить", icon: "edit"},
				"delete": {name: "Удалить", icon: "delete"},
			}
		});
		
		$('.context-menu-one').on('click', function(e){
		//	console.log('clicked', this);
		})
	});
</script>
