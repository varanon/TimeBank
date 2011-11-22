<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Comment
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_Comment extends ORM {

	// Relationships
	protected $_belongs_to = array(
					'user' => array(),
					'event' => array(),);

	public function rules()
    {
        return array(
            'type' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'event_id' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'ip' => array(
                array('not_empty'),
                array('max_length', array(':value', 16)),
            ),
            'comment' => array(
                array('not_empty'),
            ),
        );
    }

} // End User Timebank Model