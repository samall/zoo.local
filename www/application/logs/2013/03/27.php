<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-27 10:27:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\User\board.php [ 167 ] in X:\home\zoo.local\www\application\classes\Controller\User\board.php:167
2013-03-27 10:27:27 --- NOTICE: #0 X:\home\zoo.local\www\application\classes\Controller\User\board.php(167): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\zoo.loc...', 167, Array)
#1 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_template()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#4 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\zoo.local\www\application\classes\Controller\User\board.php:167
2013-03-27 11:09:31 --- EMERGENCY: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `cp1251' to `utf8' is not allowed ~ APPPATH\views\default\user\board\tpl_params.php [ 18 ] in :
2013-03-27 11:09:31 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', 'X:\home\zoo.loc...', 18, Array)
#1 X:\home\zoo.local\www\application\views\default\user\board\tpl_params.php(18): iconv('cp1251', 'utf8', '??????????????')
#2 X:\home\zoo.local\www\system\classes\Kohana\View.php(61): include('X:\home\zoo.loc...')
#3 X:\home\zoo.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\zoo.loc...', Array)
#4 X:\home\zoo.local\www\application\classes\Controller\User\board.php(172): Kohana_View->render()
#5 X:\home\zoo.local\www\system\classes\Kohana\Controller.php(84): Controller_User_Board->action_template()
#6 [internal function]: Kohana_Controller->execute()
#7 X:\home\zoo.local\www\application\classes\Request\Client\Internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Board))
#8 X:\home\zoo.local\www\system\classes\Kohana\Request\Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 X:\home\zoo.local\www\system\classes\Kohana\Request.php(991): Kohana_Request_Client->execute(Object(Request))
#10 X:\home\zoo.local\www\index.php(118): Kohana_Request->execute()
#11 {main} in :