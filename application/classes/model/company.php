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
                array('max_length', array(':value', 11)),
            ),
            'company_type_id' => array(
                array('not_empty'),
                array('max_length', array(':value', 11)),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'objective' => array(
                array('not_empty'),
				array('min_length', array(':value', 50)),
            ),
            'logo' => array(
                array(array($this, 'check_upload'), array('logo', ':value')),
            ),
        );
    }
	
	public function check_upload($filename)
    {
        // Set the default upload directory
        Upload::$default_directory = DOCROOT.'upload';

        // Validate the file first
        $validation = Validation::factory($_FILES)
                ->rules($filename, array(
                    array('not_empty'),
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
	
	public function upload($filename)
    {
        // Set the default upload directory
        Upload::$default_directory = 'upload';

        $picture = Upload::save($_FILES[$filename]);
		// Resize, sharpen, and save the image
		Image::factory($picture)
			->resize(100, 100, Image::INVERSE)
			->save();
		$this->logo = basename($picture);
    }	
	
} // End User Timebank Model