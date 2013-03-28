

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
<?php
if(count($dataset)){
?>
<div class="service">
					<div class="fl_l">
						<div class="options">
							<span>Сортировать по: </span>
							<a href="<?=$_SERVER['PATH_INFO']?>?sort=date" <?=!empty($_GET['sort']) && $_GET['sort'] == 'date' ? 'class="active"': '' ?>>дате добавления</a>
							<a href="<?=$_SERVER['PATH_INFO']?>?sort=price"  <?=!empty($_GET['sort']) && $_GET['sort'] == 'price' ? 'class="active"': '' ?>>стоимости</a>
							<a href="<?=$_SERVER['PATH_INFO']?>?sort=square"  <?=!empty($_GET['sort']) && $_GET['sort'] == 'square' ? 'class="active"': '' ?>>площади</a>
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
								<?php
								$limit = Session::instance()->get('pagelimit');
								?>
								<li><a href="/?limit=5" <?=$limit == 5 ? 'class="active"': '' ?>>5</a></li>
								<li><a href="/?limit=10" <?=$limit == 10 ? 'class="active"': '' ?>>10</a></li>
								<li><a href="/?limit=20" <?=$limit == 20 ? 'class="active"': '' ?>>20</a></li>
								<li><a href="/?limit=50" <?=$limit == 50 ? 'class="active"': '' ?>>50</a></li>
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
							<?=$pagination;?>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clear"></div>
</div>
<?php
}
?>
				<div class="clear"></div>

	<div class="offers">
				
	<?php $i=1;
	foreach($dataset as $row){
	
		$images = $row->images();
		$image = !empty($images[0]) ? $row->image_path . $images[0] : '/assets/themes/default/images/nofoto_166x100.png';
	
	?>
	
	<div class="offer <?= $i%5 ==0 ? 'last' : '' ?>">
		<a href="/catalog/details/<?=$row->id?>" class="img"><img src="<?=$image?>" alt="<?=$row->title?>"></a>
		<span class="descr"><?=$row->price?> руб., <?=$row->square?> кв. м.<br>Измайловское шоссе</span>
		<span class="date_id"><?=date('d.m.Y', $row->create)?><span class="id">iD: <?=$row->id?></span></span>
	</div>
	
	<?php $i++;
	}
	?>
	
	
		<div class="clear"></div>
	</div>

				<div class="nav_bar">
					<?=$pagination;?>
				</div>

				<div class="clear"></div>
				<br>	
				
