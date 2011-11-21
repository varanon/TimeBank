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

	protected $_has_many = array(
		'comments'       => array('model' => 'comment'),
	);
	
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
            'pic_1' => array(
                array(array($this, 'check_upload'), array('pic_1', ':value')),
            ),
            'pic_2' => array(
                array(array($this, 'check_upload'), array('pic_2', ':value')),
            ),
            'pic_3' => array(
                array(array($this, 'check_upload'), array('pic_3', ':value')),
            ),
            'pic_4' => array(
                array(array($this, 'check_upload'), array('pic_4', ':value')),
            ),
            'pic_5' => array(
                array(array($this, 'check_upload'), array('pic_5', ':value')),
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

} // End User Timebank Model