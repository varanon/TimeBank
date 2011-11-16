<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_many = array(
		'user_timebanks' => array('model' => 'user_timebank'),
		'user_tokens' => array('model' => 'user_token'),
		'roles'       => array('model' => 'role', 'through' => 'roles_users'),
		'skills'       => array('model' => 'skill', 'through' => 'users_skills'),
		'occupations'       => array('model' => 'occupation', 'through' => 'users_occupations'),
		'locations'       => array('model' => 'location', 'through' => 'users_locations'),
		'activities'       => array('model' => 'activity', 'through' => 'users_activities'),
	);
	
	protected $_has_one = array(
		'company' => array('model' => 'company'),
	);
} // End User Model