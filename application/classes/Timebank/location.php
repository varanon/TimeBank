<?php defined('SYSPATH') or die('No direct script access.');
 
class Timebank_Location {
	
	public static function get_location_array()
	{
		$locations_orm = ORM::factory('location')->find_all();
		$locations = array();
		foreach ($locations_orm as $location)
		{
			$locations[$location->id] = $location->province;
		}
		
		return $locations;
	}
}