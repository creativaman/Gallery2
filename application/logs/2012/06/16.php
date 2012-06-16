<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-16 06:40:50 --- ERROR: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-06-16 06:40:50 --- STRACE: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/mixer/sites/Gallery2/system/classes/kohana/view.php(137): Kohana_View->set_filename('auth')
#1 /home/mixer/sites/Gallery2/system/classes/kohana/view.php(30): Kohana_View->__construct('auth', NULL)
#2 /home/mixer/sites/Gallery2/application/classes/controller/auth.php(9): Kohana_View::factory('auth')
#3 [internal function]: Controller_Auth->action_index()
#4 /home/mixer/sites/Gallery2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/mixer/sites/Gallery2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/mixer/sites/Gallery2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-16 06:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-16 06:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/mixer/sites/Gallery2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mixer/sites/Gallery2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-16 06:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gallery/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-16 06:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gallery/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/mixer/sites/Gallery2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mixer/sites/Gallery2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#3 {main}