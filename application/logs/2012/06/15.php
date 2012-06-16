<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-15 17:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-15 17:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/mixer/sites/Gallery2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/mixer/sites/Gallery2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 17:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 17:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-15 17:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 17:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/mixer/sites/Gallery2/index.php(109): Kohana_Request->execute()
#1 {main}