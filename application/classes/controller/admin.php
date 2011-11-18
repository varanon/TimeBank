<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Template {
	
	public function action_index()
	{
		// If user have permission to create company
		if ( ! Auth::instance()->logged_in('admin'))
			throw new HTTP_Exception_403();
		
		// show admin page
		$companies = ORM::factory('company')->find_all();
		$this->template->content = View::factory('admin/admin')->bind('companies', $companies);
		
	}
	
	public function action_approve()
	{
		if ( ! Auth::instance()->logged_in('admin'))
			throw new HTTP_Exception_403();
			
		$this->template->content = View::factory('admin/approve')
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$company = ORM::factory('company', $this->request->post('company_id'));
			if ($company) 
            {
				$company->verify = 1;
				
				try
				{
					$company->save();
					$message = 'Verified '.$company->name;
				
				} catch (ORM_Validation_Exception $e) {
				
					// Set failure message
					$message = $e->getMessage();
					// Set errors using custom messages
					$errors = $e->errors('models');
				}
			}
			else
			{
				$message = 'Not found';
			}
			
		}
	}
}