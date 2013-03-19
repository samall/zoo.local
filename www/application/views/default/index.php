

<p class="title t">Новые предложения</p>
<div class="rainbow"></div>
<div class="categories">
		<ul class="auto_width">
		<?php
		foreach($catalog_categories as $cat){	
		?>
		<li><a href="/catalog/category/<?=$cat->id?>" <?=$active_cat == $cat->id ? 'class="active"' : ''?>><?=$cat->name?></a></li>
		<?php
		}
		?>
		<li class="helper"></li>
		</ul>
</div>

<div class="service">
					<div class="fl_l">
						<div class="options">
							<span>Сортировать по: </span>
							<a href="#">дате добавления</a>
							<a href="#" class="active">стоимости</a>
							<a href="#">площади</a>
						</div>

						<div class="options margin">
							<span>Местонахождение: </span>
							<b>Москва</b>
						</div>
					</div>

					<div class="fl_r">
						<div class="nav_bar">
							<span class="text">Показывать по:</span>
							<ul>
								<li><a href="#" class="active">10</a></li>
								<li><a href="#">20</a></li>
								<li><a href="#">50</a></li>
							</ul>
						</div>

						<div class="clear"></div>

						<div class="options margin">
							<span>Показывать за: </span>
							<a href="#">последнюю неделю</a>
							<a href="#">последний месяц</a>
						</div>

						<div class="clear"></div>

						<div class="nav_bar">
							<span class="text">Страница:</span>
							<ul>
								<li class="arrows"><a href="#"><<<</a></li>
								<li class="arrows"><a href="#"><<</a></li>
								<li><a href="#">1</a></li>
								<li><span>...</span></li>
								<li><a href="#">4</a></li>
								<li><a href="#" class="active">5</a></li>
								<li><a href="#">6</a></li>
								<li><span>...</span></li>
								<li><a href="#">1023</a></li>
								<li class="arrows"><a href="#">>></a></li>
								<li class="arrows"><a href="#">>>></a></li>
							</ul>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clear"></div>
				</div>

				<div class="clear"></div>

	<div class="offers">
				
	<?php
	foreach($dataset as $row){
	
		$images = $row->images();
		$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/themes/default/images/nofoto.png';
	
	?>
	
	<div class="offer">
		<a href="/catalog/details/<?=$row->id?>" class="img"><img src="<?=$image?>" alt="<?=$row->title?>"></a>
		<span class="descr"><?=$row->price?> руб., <?=$row->square?> кв. м.<br>Измайловское шоссе</span>
		<span class="date_id"><?=date('d.m.Y', $row->create)?><span class="id">iD: <?=$row->id?></span></span>
	</div>
	
	<?php
	}
	?>
	
	
		<div class="clear"></div>
	</div>

				<div class="nav_bar">
					<span class="text">Страница:</span>
					<ul>
						<li class="arrows"><a href="#"><<<</a></li>
						<li class="arrows"><a href="#"><<</a></li>
						<li><a href="#">1</a></li>
						<li><span>...</span></li>
						<li><a href="#">4</a></li>
						<li><a href="#" class="active">5</a></li>
						<li><a href="#">6</a></li>
						<li><span>...</span></li>
						<li><a href="#">1023</a></li>
						<li class="arrows"><a href="#">>></a></li>
						<li class="arrows"><a href="#">>>></a></li>
					</ul>
				</div>

				<div class="clear"></div>
				<br>	
				