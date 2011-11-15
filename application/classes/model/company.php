<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Company
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_Company extends ORM {

	// Relationships
	protected $_has_many = array(
		'events' => array('model' => 'event'),
	);

	protected $_belongs_to = array(
					'user' => array(),
					'company_type' => array(),);

    public function rules()
    {
        return array(
            'user_id' => array(
                array('not_empty'),
            ),
            'company_type_id' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'objective' => array(
                array('not_empty'),
            ),
            'detail' => array(
                array('not_empty'),
            ),
            'address' => array(
                array('not_empty'),
            ),
            'website' => array(
               array('not_empty'),
               array('url'),
            ),
        );
    }
	
} // End User Timebank Model