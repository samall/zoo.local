<?php

Route::set('user', 'cp/user/grants(/<action>(/<id>))', array('id' => '\d+')
	)->defaults(array(
		'directory' => 'cp/User',
		'controller' => 'grants',
		'action' => 'index',
		'id'=>0
	));

