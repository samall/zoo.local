<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-06 08:49:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type_object ~ APPPATH\views\default\user\board\edit_advert.php [ 21 ] in X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php:21
2013-03-06 08:49:40 --- NOTICE: #0 X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 21, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\application\views\default\template.php(397): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php:21
2013-03-06 08:51:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The region_id property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 08:51:52 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('region_id')
#1 X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php(33): Kohana_ORM->__get('region_id')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#4 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 X:\home\zoo.local\www\application\views\default\template.php(397): Kohana_View->__toString()
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#7 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 09:34:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: regions ~ APPPATH\views\default\user\board\edit_advert.php [ 9 ] in X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php:9
2013-03-06 09:34:45 --- NOTICE: #0 X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 9, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\application\views\default\template.php(397): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\application\views\default\user\board\edit_advert.php:9
2013-03-06 10:49:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Geo_City' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-06 10:49:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 10:51:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Geo_City' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-06 10:51:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 10:52:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Geo_City class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 10:52:37 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 X:\home\zoo.local\www\application\classes\Controller\User\board.php(99): Kohana_ORM->__get('id')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_subregions()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 10:53:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Geo_City class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 10:53:12 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 X:\home\zoo.local\www\application\classes\Controller\User\board.php(99): Kohana_ORM->__get('name')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_subregions()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 11:02:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\User\board.php [ 90 ] in :
2013-03-06 11:02:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 11:21:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: region ~ APPPATH\classes\Controller\User\board.php [ 90 ] in X:\home\zoo.local\www\application\classes\Controller\User\board.php:90
2013-03-06 11:21:08 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\User\board.php(90): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\zoo.loc...', 90, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_subregions()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\User\board.php:90
2013-03-06 11:43:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\User\board.php [ 30 ] in :
2013-03-06 11:43:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 12:35:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: all_images ~ APPPATH\classes\Controller\User\board.php [ 26 ] in X:\home\zoo.local\www\application\classes\Controller\User\board.php:26
2013-03-06 12:35:25 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\User\board.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 26, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\User\board.php:26
2013-03-06 12:41:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH\classes\Controller\User\board.php [ 23 ] in X:\home\zoo.local\www\application\classes\Controller\User\board.php:23
2013-03-06 12:41:00 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\User\board.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 23, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\User\board.php:23
2013-03-06 13:14:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The tmp_image_path property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 13:14:35 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('tmp_image_path')
#1 X:\home\zoo.local\www\application\classes\Controller\User\board.php(133): Kohana_ORM->__get('tmp_image_path')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 13:15:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The tmp_image_path property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 13:15:05 --- NOTICE: #0 X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('tmp_image_path')
#1 X:\home\zoo.local\www\application\classes\Controller\User\board.php(133): Kohana_ORM->__get('tmp_image_path')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\orm\classes\Kohana\ORM.php:600
2013-03-06 13:48:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\User\board.php [ 67 ] in :
2013-03-06 13:48:23 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 13:48:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\User\board.php [ 67 ] in :
2013-03-06 13:48:37 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 13:48:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\User\board.php [ 67 ] in :
2013-03-06 13:48:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 13:56:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\User\board.php [ 68 ] in :
2013-03-06 13:56:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 13:59:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\Controller\User\board.php [ 63 ] in :
2013-03-06 13:59:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-06 15:08:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\default\index.php [ 10 ] in :
2013-03-06 15:08:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :