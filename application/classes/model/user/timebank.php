<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * User timebank
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_User_Timebank extends ORM {

	// Relationships
	protected $_belongs_to = array('user' => array());

	public function rules()
    {
        return array(
            'user_id' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'status' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'hour' => array(
                array('not_empty'),
                array('numeric'),
            ),
        );
    }
} // End User Timebank Model