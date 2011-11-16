<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Location extends ORM {

	protected $_has_many = array(
		'users'       => array('model' => 'user', 'through' => 'users_locations'),
		'events'       => array('model' => 'event'),
	);
	
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            'description' => array(
                array('not_empty'),
            ),
        );
    }
} // End User Model