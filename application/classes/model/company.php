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

} // End User Timebank Model