<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-26 08:11:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Catalog.php [ 30 ] in :
2013-03-26 08:11:11 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 08:11:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(`param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `pa' at line 1 [ REPLACE INTO _cat_novostroyki SET (`param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `param_9`='dwedw') WHERE catalog_id='11'; ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 08:11:57 --- NOTICE: #0 X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'REPLACE INTO _c...', false, Array)
#1 X:\home\zoo.local\www\application\classes\Model\Catalog.php(35): Kohana_Database_Query->execute()
#2 X:\home\zoo.local\www\application\classes\Controller\User\board.php(91): Model_Catalog->set_values(Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 08:12:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(`param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `pa' at line 1 [ REPLACE INTO `_cat_novostroyki` SET (`param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `param_9`='dwedw') WHERE catalog_id='11'; ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 08:12:19 --- NOTICE: #0 X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'REPLACE INTO `_...', false, Array)
#1 X:\home\zoo.local\www\application\classes\Model\Catalog.php(35): Kohana_Database_Query->execute()
#2 X:\home\zoo.local\www\application\classes\Controller\User\board.php(91): Model_Catalog->set_values(Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 08:19:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `par' at line 1 [ REPLACE INTO `_cat_novostroyki` SET catalog_id='11' `param_4`='edwedw', `param_3`='wedw', `param_6`='edwe', `param_8`='edwedw', `param_9`='dwedw'; ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 08:19:12 --- NOTICE: #0 X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'REPLACE INTO `_...', false, Array)
#1 X:\home\zoo.local\www\application\classes\Model\Catalog.php(32): Kohana_Database_Query->execute()
#2 X:\home\zoo.local\www\application\classes\Controller\User\board.php(91): Model_Catalog->set_values(Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\zoo.local\www\modules\database\classes\Kohana\Database\Query.php:251
2013-03-26 09:06:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Catalog::detete_values() ~ APPPATH\classes\Model\Catalog.php [ 55 ] in :
2013-03-26 09:06:15 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 09:08:32 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\Catalog.php [ 22 ] in X:\home\zoo.local\www\application\classes\Model\Catalog.php:22
2013-03-26 09:08:32 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Model\Catalog.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\zoo.loc...', 22, Array)
#1 X:\home\zoo.local\www\application\classes\Controller\User\board.php(37): Model_Catalog->get_values()
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\application\classes\Model\Catalog.php:22
2013-03-26 11:02:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\default\index.php [ 54 ] in X:\home\zoo.local\www\application\views\default\index.php:54
2013-03-26 11:02:23 --- NOTICE: #0 X:\home\zoo.local\www\application\views\default\index.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 54, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\application\views\default\template.php(397): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\application\views\default\index.php:54