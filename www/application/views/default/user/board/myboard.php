<p class="title t">Личный кабинет &gt; Мои предложения</p>
<div class="rainbow"></div>


<div class="offers all_offers my_offers">

	<?php
	foreach($dataset as $row){

		$images = $row->images();
		$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/nofoto.png';
		
	?>
		<div class="offer_wrapper">
			<a class="url" href="#"><?=$row->title?>, коттедж 400 м<sup>2</sup></a>
			<div class="offer">
				<a class="img" href="#">
					<img alt="" src="<?= $image ?>" />
					
					</a>
				<span class="date_id"><?=date('d.m.Y', $row->create)?><span class="id">iD: <?=$row->id?></span></span>
			</div>
			<div class="offer_details">
				<span class="price"><?=$row->price?> руб.</span>
				<span class="details"><?=$row->description?>
					
				<div class="available_services">
					<a class="hide" href="/user/board/publish/<?=$row->id?>">скрыть</a>
					<a class="del" href="/user/board/delete/<?=$row->id?>">удалить</a>
					<a class="change" href="/user/board/edit/<?=$row->id?>">изменить</a>
					<input type="checkbox" style="position: absolute; left: -9999px;"><span style="display: inline-block;" class="checkbox"></span>
				</div>
			</div>
			<div class="available_services b">
				<a class="up" href="#">поднять</a>
				<a class="pick_out" href="#">выделить</a>
				<a class="premium" href="#">премиум</a>
				</div>
			</div>
	
	<?php
	}
	?>
	<div class="clear"></div>
	<div class="nav_bar">
		<span class="text">Страница:</span>
		<ul>
			<li class="arrows"><a href="#">&lt;&lt;&lt;</a></li>
			<li class="arrows"><a href="#">&lt;&lt;</a></li>
			<li><a href="#">1</a></li>
			<li><span>...</span></li>
			<li><a href="#">4</a></li>
			<li><a class="active" href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><span>...</span></li>
			<li><a href="#">1023</a></li>
			<li class="arrows"><a href="#">&gt;&gt;</a></li>
			<li class="arrows"><a href="#">&gt;&gt;&gt;</a></li>
		</ul>
	</div>	
	
	<div class="btn_center"><a class="btn2" href="/user/board/edit"><span>РАЗМЕСТИТЬ ЕЩЕ ОДНО ПРЕДЛОЖЕНИЕ</span></a></div>
</div>