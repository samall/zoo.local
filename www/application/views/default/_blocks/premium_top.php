<div class="premium_top">
				<a href="#" class="to_premium">Как сюда попасть?</a>
				<p class="premium_title">Премиум</p>
				
<?php
foreach($premium as $row){

	$images = $row->images();
	$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/nofoto.png';
?>

	<div class="premium_offer">
		<a class="img" href="/catalog/details/<?=$row->id?>"><img alt="" src="<?=$image?>"></a>
		<a class="title" href="/catalog/details/<?=$row->id?>"><?=$row->title?></a>
	</div>

<?php
}
?>
	
	<div class="clear"></div>
</div>