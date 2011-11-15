<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-15 00:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `users_skills` (`user_id`, `skill_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-15 00:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `users_skills` (`user_id`, `skill_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\TimeBank\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\AppServ\www\TimeBank\application\classes\controller\user.php(97): Kohana_ORM->add('skills', Object(Model_Skill))
#3 [internal function]: Controller_User->action_test()
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-15 00:33:01 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 1 [ INSERT INTO `users_skills` (`user_id`, `skill_id`) VALUES ('3', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-15 00:33:01 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1' for key 1 [ INSERT INTO `users_skills` (`user_id`, `skill_id`) VALUES ('3', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\TimeBank\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\AppServ\www\TimeBank\application\classes\controller\user.php(97): Kohana_ORM->add('skills', Object(Model_Skill))
#3 [internal function]: Controller_User->action_test()
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-15 09:21:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Loccation' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-15 09:21:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Loccation' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('loccation', Array)
#1 {main}
2011-11-15 09:21:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  loccations ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-11-15 09:21:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  loccations ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler('loccations', Object(Model_Location))
#1 C:\AppServ\www\TimeBank\application\classes\controller\user.php(104): Kohana_ORM->add()
#2 [internal function]: Controller_User->action_test(Object(Controller_User))
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-15 09:33:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\user.php [ 98 ]
2011-11-15 09:33:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\user.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_user')
#1 {main}
2011-11-15 10:20:19 --- ERROR: Kohana_Exception [ 0 ]: The company_type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-15 10:20:19 --- STRACE: Kohana_Exception [ 0 ]: The company_type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('company_type', Object(Model_Company_Type))
#1 C:\AppServ\www\TimeBank\application\classes\controller\user.php(104): Kohana_ORM->__set('company_type', Object(Model_Company_Type))
#2 [internal function]: Controller_User->action_test()
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-15 10:22:54 --- ERROR: Kohana_Exception [ 0 ]: The company_type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-15 10:22:54 --- STRACE: Kohana_Exception [ 0 ]: The company_type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('company_type', Object(Model_Company_Type))
#1 C:\AppServ\www\TimeBank\application\classes\controller\user.php(104): Kohana_ORM->__set('company_type', Object(Model_Company_Type))
#2 [internal function]: Controller_User->action_test()
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-15 10:24:48 --- ERROR: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-15 10:24:48 --- STRACE: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Company class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('type', Object(Model_Company_Type))
#1 C:\AppServ\www\TimeBank\application\classes\controller\user.php(104): Kohana_ORM->__set('type', Object(Model_Company_Type))
#2 [internal function]: Controller_User->action_test()
#3 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-15 10:35:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'company_type_id' in 'field list' [ INSERT INTO `companies` (`user_id`, `objective`, `company_type_id`) VALUES ('3', 'objobj', 8) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-15 10:35:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'company_type_id' in 'field list' [ INSERT INTO `companies` (`user_id`, `objective`, `company_type_id`) VALUES ('3', 'objobj', 8) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\AppServ\www\TimeBank\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\AppServ\www\TimeBank\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 C:\AppServ\www\TimeBank\application\classes\controller\user.php(105): Kohana_ORM->save()
#4 [internal function]: Controller_User->action_test()
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-15 22:34:25 --- ERROR: View_Exception [ 0 ]: The requested view user/company could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-15 22:34:25 --- STRACE: View_Exception [ 0 ]: The requested view user/company could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\AppServ\www\TimeBank\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/company')
#1 C:\AppServ\www\TimeBank\system\classes\kohana\view.php(30): Kohana_View->__construct('user/company', NULL)
#2 C:\AppServ\www\TimeBank\application\classes\controller\user.php(110): Kohana_View::factory('user/company')
#3 [internal function]: Controller_User->action_company()
#4 C:\AppServ\www\TimeBank\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\AppServ\www\TimeBank\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\AppServ\www\TimeBank\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\AppServ\www\TimeBank\index.php(109): Kohana_Request->execute()
#8 {main}