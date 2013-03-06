<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-04 08:30:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Catalog::orderby() ~ APPPATH\classes\Controller\Index.php [ 7 ] in :
2013-03-04 08:30:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-04 08:30:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'publish' in 'where clause' [ SELECT `catalog`.`id` AS `id`, `catalog`.`user_id` AS `user_id`, `catalog`.`type_deal` AS `type_deal`, `catalog`.`type_object` AS `type_object`, `catalog`.`region` AS `region`, `catalog`.`subregion` AS `subregion`, `catalog`.`remoteness` AS `remoteness`, `catalog`.`condition` AS `condition`, `catalog`.`title` AS `title`, `catalog`.`price` AS `price`, `catalog`.`square` AS `square`, `catalog`.`description` AS `description`, `catalog`.`images` AS `images`, `catalog`.`state` AS `state`, `catalog`.`status` AS `status`, `catalog`.`published` AS `published`, `catalog`.`create` AS `create`, `catalog`.`modify` AS `modify` FROM `catalogs` AS `catalog` WHERE `publish` = '1' ORDER BY `id` DESC LIMIT 25 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-04 08:30:56 --- NOTICE: #0 X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalog', Array)
#1 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 X:\home\zoo.local\www\application\classes\Controller\Index.php(7): Kohana_ORM->find_all()
#4 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-04 10:43:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The publish property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 10:43:38 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('publish')
#1 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(16): Kohana_ORM->__get('publish')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_details()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-04 10:45:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\views\default\catalog\details.php [ 12 ] in X:\home\zoo.local\www\application\views\default\catalog\details.php:12
2013-03-04 10:45:46 --- NOTICE: #0 X:\home\zoo.local\www\application\views\default\catalog\details.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 12, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\application\views\default\template.php(397): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\application\views\default\catalog\details.php:12
2013-03-04 13:46:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\classes\Controller\Catalog.php [ 35 ] in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:35
2013-03-04 13:46:58 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 35, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_fromuser()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:35