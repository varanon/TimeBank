<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-14 22:08:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_timebanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-14 22:08:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_timebanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('user_timebanks')
#1 {main}
2011-11-14 22:09:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_Timebanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-14 22:09:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_Timebanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('User_Timebanks')
#1 {main}
2011-11-14 22:12:37 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `user_timebank_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 22:12:37 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `user_timebank_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\TimeBank\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\AppServ\www\TimeBank\application\classes\controller\user.php(100): Kohana_ORM->add('user_timebanks', Object(Model_User_Timebank))
#3 [internal function]: Controller_User->action_test()
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-14 22:16:17 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `user_token_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 22:16:17 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `user_token_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\TimeBank\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\AppServ\www\TimeBank\application\classes\controller\user.php(101): Kohana_ORM->add('user_tokens', Object(Model_User_Token))
#3 [internal function]: Controller_User->action_test()
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-14 22:16:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  tokens ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-11-14 22:16:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  tokens ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler('tokens', Object(Model_User_Token))
#1 C:\AppServ\www\TimeBank\application\classes\controller\user.php(101): Kohana_ORM->add()
#2 [internal function]: Controller_User->action_test(Object(Controller_User))
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-14 22:46:50 --- ERROR: Kohana_Exception [ 0 ]: The timebanks property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-14 22:46:50 --- STRACE: Kohana_Exception [ 0 ]: The timebanks property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\AppServ\www\TimeBank\application\classes\controller\user.php(113): Kohana_ORM->__get('timebanks')
#1 [internal function]: Controller_User->action_test()
#2 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-14 22:47:01 --- ERROR: Kohana_Exception [ 0 ]: The user_timebank property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-14 22:47:01 --- STRACE: Kohana_Exception [ 0 ]: The user_timebank property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\AppServ\www\TimeBank\application\classes\controller\user.php(113): Kohana_ORM->__get('user_timebank')
#1 [internal function]: Controller_User->action_test()
#2 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#6 {main}