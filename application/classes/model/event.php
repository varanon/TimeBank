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

} // End User Timebank Model