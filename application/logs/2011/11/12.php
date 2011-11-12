<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-12 17:20:00 --- ERROR: Database_Exception [ 1146 ]: Table 'timebank.users' doesn't exist [ SELECT * FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-12 17:20:00 --- STRACE: Database_Exception [ 1146 ]: Table 'timebank.users' doesn't exist [ SELECT * FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\AppServ\www\kohana\application\classes\controller\welcome.php(8): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 C:\AppServ\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-12 17:20:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\classes\controller\welcome.php [ 11 ]
2011-11-12 17:20:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 C:\AppServ\www\kohana\application\classes\controller\welcome.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#2 C:\AppServ\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-12 18:01:34 --- ERROR: Database_Exception [ 1146 ]: Table 'timebank.members' doesn't exist [ SELECT * FROM `members` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-12 18:01:34 --- STRACE: Database_Exception [ 1146 ]: Table 'timebank.members' doesn't exist [ SELECT * FROM `members` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\AppServ\www\kohana\application\classes\controller\welcome.php(8): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 C:\AppServ\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-12 18:02:07 --- ERROR: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-12 18:02:07 --- STRACE: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\AppServ\www\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/info')
#1 C:\AppServ\www\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\AppServ\www\kohana\application\classes\controller\user.php(7): Kohana_View::factory('user/info')
#3 [internal function]: Controller_User->action_index()
#4 C:\AppServ\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-12 18:16:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\i18n\th.php [ 2 ]
2011-11-12 18:16:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\i18n\th.php [ 2 ]
--
#0 C:\AppServ\www\kohana\application\i18n\th.php(2): Kohana_Core::error_handler('C:\AppServ\www\...')
#1 C:\AppServ\www\kohana\system\classes\kohana\core.php(792): include('C:\AppServ\www\...')
#2 C:\AppServ\www\kohana\system\classes\kohana\i18n.php(120): Kohana_Core::load('th')
#3 C:\AppServ\www\kohana\system\classes\kohana\i18n.php(81): Kohana_I18n::load('Failed to valid...')
#4 C:\AppServ\www\kohana\system\classes\kohana\i18n.php(161): Kohana_I18n::get('Failed to valid...', NULL)
#5 C:\AppServ\www\kohana\system\classes\kohana\kohana\exception.php(57): __('Failed to valid...', NULL, 0)
#6 C:\AppServ\www\kohana\modules\orm\classes\kohana\orm\validation\exception.php(40): Kohana_Kohana_Exception->__construct('user', Object(Validation))
#7 C:\AppServ\www\kohana\modules\orm\classes\kohana\orm.php(1174): Kohana_ORM_Validation_Exception->__construct(Object(Validation))
#8 C:\AppServ\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#9 C:\AppServ\www\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Array, Array)
#10 C:\AppServ\www\kohana\application\classes\controller\user.php(35): Model_Auth_User->create_user()
#11 [internal function]: Controller_User->action_create(Object(Controller_User))
#12 C:\AppServ\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#13 C:\AppServ\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\AppServ\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 C:\AppServ\www\kohana\index.php(109): Kohana_Request->execute()
#16 {main}
2011-11-12 18:34:46 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Mysql' not found ~ MODPATH\auth\classes\kohana\auth.php [ 37 ]
2011-11-12 18:34:46 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Mysql' not found ~ MODPATH\auth\classes\kohana\auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}