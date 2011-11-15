<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Occupation extends ORM {

	protected $_has_many = array(
		'users'       => array('model' => 'user', 'through' => 'users_occupations'),
	);
	
} // End User Model