

<p class="title t">Новости рынка недвижимости</p>
<div class="rainbow"></div>

<?php
foreach($data['news'] as $row){
?>
	<div class="news">
		<a class="img" href="/article/<?=$row->alias?>"><img alt="" src="/assets/images/premium_house_top.jpg"></a>
		<div class="news_content">
			<a href="#"><?=$row->title?></a>
			<span class="date"><?=$row->pub_date?>26 Ноя 2012, 12:31</span>
			<span class="descr"><?=$row->content?></span>
		</div>
	</div>
<?php
}
?>

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

<div class="clear"></div>
<br />


<p class="title t">Полезные статьи и советы экспертов</p>
<div class="rainbow"></div>


<?php
foreach($data['articles'] as $row){
?>
	<div class="news">
		<a class="img" href="#"><img alt="" src="/assets/images/premium_house_top.jpg"></a>
		<div class="news_content">
			<a href="/article/<?=$row->alias?>"><?=$row->title?></a>
			<span class="date">26 Ноя 2012, 12:31</span>
			<span class="descr"><?=$row->content?></span>
		</div>
	</div>
<?php
}
?>


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

<div class="clear"></div>


<?php
foreach($themes as $theme)
{
	
	if(!empty($data[$theme->id])){

		foreach($data[$theme->id] as $item)
		{
?>
	
<?php
		}
	}
}
?>
