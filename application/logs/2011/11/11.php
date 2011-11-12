<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-11 10:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-11 10:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}