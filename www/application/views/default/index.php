<div class="content">
	<div class="wrapper">

	<div class="section-title special">
			Спецпредложения
			
			<div class="selector">
			<ul>
				<li><a href="/catalog/special/1" class="last <?=($_SERVER['REQUEST_URI'] != "/catalog/special/1/2" && $_SERVER['REQUEST_URI'] != "/catalog/special/1/1") ? 'active': ''?>"><i>Все спецпредложения</i></a>
				</li>
				<li><a href="/catalog/special/1/1" <?=$_SERVER['REQUEST_URI'] == "/catalog/special/1/1"  ? 'class="active"': ''?>><i>Аренда</i></a>
				</li>
				<li><a href="/catalog/special/1/2" <?=$_SERVER['REQUEST_URI'] == "/catalog/special/1/2"  ? 'class="active"': ''?>><i>Продажа</i></a>
				</li>
			</ul>
		</div>
		</div>
		
		<div class="catalog">
	<?php
	if(!empty($special))
	{
		$i=1;
		foreach($special as $item)
		{
	?>
	
	<div class="item <?= $i%5 == 0 ? 'last' : ''?>">
	
		
		<div class="image">
			<a href="/object/<?=$item->alias?>">
			<img src="/crop.php?image=/assets/objects/foto/<?=$item->main_foto?>&w=209&h=209" alt="<?=$item->title?>" />
			</a>
		</div>
		<div class="title"><a href="/object/<?=$item->alias?>"><?=$item->title?></a></div>
		<div class="description">

		<?php
		$type_range = array('_range_float', '_range_int', '_range_string');	
		$ms = $item->measures();
					
			foreach($tpl_columns[$item->table_name] as $col)
			{
				if(in_array($col->type_val, $type_range))
				{		
					$o = array();
					if(!empty($item->{$col->catalog_attribute_key.'_from'}))
					{
						$o[] = 'от '. $item->{$col->catalog_attribute_key.'_from'};
					}

					if(!empty($item->{$col->catalog_attribute_key.'_to'}))			
					{
						$o[] = 'до '. $item->{$col->catalog_attribute_key.'_to'};
					}
					$output = implode(' ', $o);
				}
				else
				{
					$output = $item->{$col->catalog_attribute_key};
				}
			
				if(empty($output)) continue;
				$m = !empty($ms[$col->id]) ? $measures[$ms[$col->id]]->short : '';
			?>
			<div class="key <?=$col->catalog_attribute_key?>"><?=$attributes[$col->catalog_attribute_key]?>:</div><div class="value"><?=$output?>&nbsp;<?=$m?></div> 
			<?php		
			}
			?>
		</div>
		
		<a class="more" href="/object/<?=$item->alias?>">подробнее</a>
		
	</div>
	
	<?php
			$i++;
		}
	}
	?>	
	
	<div class="cb"></div>
</div>

	</div>
</div>
