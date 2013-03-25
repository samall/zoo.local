<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-25 07:53:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Catalog_Template::create_table() ~ MODPATH\cp\classes\Controller\Cp\Catalog\Category.php [ 52 ] in :
2013-03-25 07:53:46 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-25 07:54:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Catalog_Template::full_tree() ~ APPPATH\classes\Model\Catalog\Category.php [ 11 ] in :
2013-03-25 07:54:29 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-25 07:55:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ MODPATH\cp\views\mightyadmin\template.php [ 146 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 07:55:21 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 146, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Catalog_Category))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 07:55:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ MODPATH\cp\views\mightyadmin\template.php [ 146 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 07:55:53 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 146, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Catalog_Category))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 07:58:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ MODPATH\cp\views\mightyadmin\template.php [ 146 ] in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 07:58:01 --- NOTICE: #0 X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 146, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#3 X:\home\zoo.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_Cp_Catalog_Category))
#7 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\zoo.local\www\modules\cp\views\mightyadmin\template.php:146
2013-03-25 08:03:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB::list_tables() ~ APPPATH\classes\Model\Catalog\Category.php [ 36 ] in :
2013-03-25 08:03:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :