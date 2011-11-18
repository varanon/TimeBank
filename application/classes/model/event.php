<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Event
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_Event extends ORM {

	// Relationships
	protected $_belongs_to = array(
					'company' => array(),
					'location' => array(),);

	public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 3)),
            ),
            'open_date' => array(
                array('not_empty'),
                array('date'),
            ),
            'end_date' => array(
                array('not_empty'),
                array('date'),
            ),
            'company_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
            'location_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
            'status' => array(
                array('not_empty'),
            ),
            'phone' => array(
                array('not_empty'),
				array('numeric'),
            ),
            'contractor_name' => array(
                array('not_empty'),
            ),
            'user_need_count' => array(
                array('not_empty'),
                array('digit'),
            ),
            'time_cost' => array(
                array('not_empty'),
                array('digit'),
                array('max_length', array(':value', 3)),
            ),
            'detail' => array(
                array('not_empty'),
                array('min_length', array(':value', 50)),
            ),
        );
    }

	public function filters()
	{
		return array(
			'open_date' => array(
				array('trim'),
			),
			'end_date' => array(
				array('trim'),
			),
		);
	}
} // End User Timebank Model