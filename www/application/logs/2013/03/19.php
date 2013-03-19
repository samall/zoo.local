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