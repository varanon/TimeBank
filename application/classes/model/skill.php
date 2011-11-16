<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Skill extends ORM {

	protected $_has_many = array(
		'users'       => array('model' => 'user', 'through' => 'users_skills'),
	);
	
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
            'description' => array(
                array('not_empty'),
            ),
        );
    }
} // End User Model