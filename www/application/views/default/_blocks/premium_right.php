<p class="premium_title">Премиум</p>

<div class="premium_right">
	<a href="#" class="to_premium">Как сюда попасть?</a>

<?php
foreach($premium as $row){

	$images = $row->images();
	$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/themes/default/images/nofoto_175x125.png';
?>

	<div class="premium_offer">
		<a class="img" href="/catalog/details/<?=$row->id?>"><img alt="" src="<?=$image?>"></a>
		<a class="title" href="/catalog/details/<?=$row->id?>"><?=$row->title?></a>
	</div>

<?php
}
?>

<a href="#" class="to_premium bott">Как сюда попасть?</a>

<div class="clear"></div>
</div>
