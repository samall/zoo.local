<?php


return array(

	'site'=> array(
		array('link'=>'/cp', 'title'=>'Начало', 'icon'=>'glyph-cloud', 'childs'=>array()),
		array('link'=>'/cp/structure/index', 'title'=>'Структура', 'icon'=>'icon-grid-view', 'childs'=>array(

		)),
		array('link'=>'#', 'title'=>'Модули', 'icon'=>'icon-cube', 'childs'=>array(
			
			array('link'=>'/cp/text/index', 'title'=>'Текст'),
			array('link'=>'/cp/article/index', 'title'=>'Статьи')
		)),
		array('link'=>'#', 'title'=>'Каталог', 'icon'=>'icon-cube', 'childs'=>array(
			
			array('link'=>'/cp/catalog_category/index', 'title'=>'Категории'),
			array('link'=>'/cp/article/index', 'title'=>'')
		))
	), 

	'administration' => array(
		array('link'=>'#', 'title'=>'Пользователи', 'icon'=>'glyph-cloud', 'childs'=>array(
			array('link'=>'/cp/user/index', 'title'=>'Пользователи'),
			array('link'=>'/cp/user/grants/roles', 'title'=>'Роли пользователей')
		)),
		array('link'=>'/cp/settings/index', 'title'=>'Настройки сайта', 'icon'=>'glyph-cloud', 'childs'=>array(

		))
	)

);

