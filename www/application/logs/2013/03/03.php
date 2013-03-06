<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 19:38:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT `catalog`.`id` AS `id`, `catalog`.`user_id` AS `user_id`, `catalog`.`type_deal` AS `type_deal`, `catalog`.`type_object` AS `type_object`, `catalog`.`region` AS `region`, `catalog`.`subregion` AS `subregion`, `catalog`.`remoteness` AS `remoteness`, `catalog`.`condition` AS `condition`, `catalog`.`title` AS `title`, `catalog`.`price` AS `price`, `catalog`.`square` AS `square`, `catalog`.`description` AS `description`, `catalog`.`images` AS `images`, `catalog`.`state` AS `state`, `catalog`.`published` AS `published`, `catalog`.`create` AS `create`, `catalog`.`modify` AS `modify` FROM `catalogs` AS `catalog` WHERE `status` = '2' LIMIT 6 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-03 19:38:18 --- NOTICE: #0 X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalog', Array)
#1 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 X:\home\zoo.local\www\application\classes\Model\Catalog.php(55): Kohana_ORM->find_all()
#4 X:\home\zoo.local\www\application\classes\Controller\Frontend.php(90): Model_Catalog->get_premium(6, 0)
#5 X:\home\zoo.local\www\application\classes\Controller\Frontend.php(31): Controller_Frontend->premium_top()
#6 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(69): Controller_Frontend->before()
#7 [internal function]: Kohana_Controller->execute()
#8 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#9 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#11 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251