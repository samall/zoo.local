

<p class="title t"><?=$owner->info->name?>. Все предложения</p>
<div class="rainbow"></div>

	<div class="offers all_offers">
				
	<?php $i=1;
	foreach($dataset as $row){
	
		$images = $row->images();
		$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/nofoto.png';
	
	?>
	
	<div class="offer_wrapper">
		<a href="/catalog/details/<?=$row->id?>" class="url"><?=$row->title?></a>
		<div class="offer">
			<a href="/catalog/details/<?=$row->id?>" class="img"><img src="<?=$image?>" alt="<?=$row->title?>"></a>
			<span class="date_id"><?=date('d.m.Y', $row->create)?><span class="id">iD: <?=$row->id?></span></span>
		</div>
		<div class="offer_details">
			<span class="price"><?=$row->price?> руб.</span>
			<span class="details"><?=$row->description?></span>
			<div class="available_services">					
			</div>
		</div>
	</div>
	
	<?php
	$i++l
	}
	?>

		<div class="clear"></div>
	</div>
				