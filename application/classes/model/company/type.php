<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Company Type
 *
 * @author     Pongrob Saisuwan
 * @copyright  (c) 2011 Pongrob Saisuwan
 */
class Model_Company_Type extends ORM {

	// Relationships
	protected $_has_many = array(
		'company' => array('model' => 'company'),
	);

} // End User Timebank Model