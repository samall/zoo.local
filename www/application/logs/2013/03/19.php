<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 08:04:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_cat ~ APPPATH\views\default\index.php [ 10 ] in X:\home\zoo.local\www\application\views\default\index.php:10
2013-03-19 08:04:42 --- NOTICE: #0 X:\home\zoo.local\www\application\views\default\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 10, Array)
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
#14 {main} in X:\home\zoo.local\www\application\views\default\index.php:10
2013-03-19 11:05:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: 1 ~ APPPATH\classes\Controller\Catalog.php [ 50 ] in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:50
2013-03-19 11:05:30 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\zoo.loc...', 50, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:50
2013-03-19 11:48:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: childs ~ APPPATH\classes\Controller\Catalog.php [ 60 ] in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:60
2013-03-19 11:48:00 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 60, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:60
2013-03-19 11:57:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '&' ~ APPPATH\classes\Controller\Catalog.php [ 46 ] in :
2013-03-19 11:57:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 11:58:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '&' ~ APPPATH\classes\Controller\Catalog.php [ 46 ] in :
2013-03-19 11:58:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 12:08:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$parent_id ~ APPPATH\classes\Controller\Catalog.php [ 49 ] in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:49
2013-03-19 12:08:22 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', 'X:\home\zoo.loc...', 49, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:49
2013-03-19 12:09:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: child ~ APPPATH\classes\Controller\Catalog.php [ 51 ] in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:51
2013-03-19 12:09:31 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\Catalog.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 51, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\Catalog.php:51
2013-03-19 14:41:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: action ~ MODPATH\cp\views\mightyadmin\structure\edit.php [ 1 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:1
2013-03-19 14:41:49 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 1, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(163): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Structure))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:1
2013-03-19 14:44:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: struct ~ MODPATH\cp\views\mightyadmin\structure\edit.php [ 37 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:37
2013-03-19 14:44:31 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 37, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(163): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Structure))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:37
2013-03-19 14:47:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: struct ~ MODPATH\cp\views\mightyadmin\structure\edit.php [ 37 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:37
2013-03-19 14:47:51 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 37, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(163): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Structure))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\edit.php:37
2013-03-19 15:20:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: d ~ MODPATH\cp\views\mightyadmin\structure\structure.php [ 24 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\structure.php:24
2013-03-19 15:20:17 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\structure.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 24, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(163): Kohana_View->__toString()
#5 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#6 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#7 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Structure))
#11 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\structure\structure.php:24
2013-03-19 15:24:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cat_id ~ MODPATH\cp\classes\Controller\Cp\Structure.php [ 78 ] in X:\home\zoo.local\www\modules\cp\classes\Controller\Cp\Structure.php:78
2013-03-19 15:24:21 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\classes\Controller\Cp\Structure.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 78, Array)
#1 X:\home\zoo.local\www\modules\cp\classes\Controller\Cp\Structure.php(52): Controller_Cp_Structure->move('17', 'up')
#2 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_Cp_Structure->action_moveup()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Structure))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\zoo.local\www\modules\cp\classes\Controller\Cp\Structure.php:78
2013-03-19 15:56:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Structure::is_not_first() ~ MODPATH\cp\classes\Controller\Cp\Structure.php [ 74 ] in :
2013-03-19 15:56:25 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :