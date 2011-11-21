<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_many = array(
		'user_timebanks' => array('model' => 'user_timebank'),
		'user_tokens' => array('model' => 'user_token'),
		'roles'       => array('model' => 'role', 'through' => 'roles_users'),
		'skills'       => array('model' => 'skill', 'through' => 'users_skills'),
		'occupations'       => array('model' => 'occupation', 'through' => 'users_occupations'),
		'locations'       => array('model' => 'location', 'through' => 'users_locations'),
		'activities'       => array('model' => 'activity', 'through' => 'users_activities'),
	);
	
	protected $_has_one = array(
		'company' => array('model' => 'company'),
	);
	
	public function filters()
	{
		return parent::filters() + array(
			'birthdate' => array(
				array('trim'),
			),
		);
	}
	
	public function rules()
    {
        return parent::rules() + array(
            //'birthdate' => array(
            //    array('date')
            //),
			'first_name' => array(
                array('min_length', array(':value', 3))
			),
			'last_name' => array(
                array('min_length', array(':value', 3))
            ),
            'phone' => array(
                array('numeric')
            ),
            'profile_image' => array(
                array(array($this, 'check_upload'), array('profile_image', ':value')),
            ),
        );
    }
	
	public function check_upload($filename)
    {
		if (isset($_FILES[$filename]['name']) && $_FILES[$filename]['name'] != '')
		{
			// Validate the file first
			$validation = Validation::factory($_FILES)
					->rules($filename, array(
    	                array('Upload::not_empty'),
						array('Upload::valid'),
						array('Upload::type', array(':value', array('gif', 'jpg', 'png'))),
						array('Upload::size', array(':value', '1M')),
					));
	
			// Validate and upload OK
			if ($validation->check())
			{
				$this->upload($filename);
				
				return TRUE;
			}
			else
			{
				//print_r($validation->errors('upload'));
				return FALSE;
			}
		}
		else
			return TRUE;
    }	
	
	public function upload($filename)
    {
        $picture = Upload::save($_FILES[$filename]);
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->resize(100, 100, Image::INVERSE)
			->save();
		$this->$filename = basename($picture);
    }
	
} // End User Model