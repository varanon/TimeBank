<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Company extends Controller_Template {
	
	public function action_index()
	{
        $this->template->content = View::factory('company/index');
	}
	
	public function action_create()
	{
        $this->template->content = View::factory('company/create')
            ->bind('message', $message)
			->bind('errors', $errors);
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			try
			{
				// Log out current user
				Auth::instance()->logout();
				
                // Create the user using form values
                $user = ORM::factory('user')->create_user($this->request->post(), array(
                    'username',
                    'password',
					'email',
                ));
                 
                // Grant user login and company role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));
                $user->add('roles', ORM::factory('role', array('name' => 'company')));                 

                $message = __('Please confirm email to continue');
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	} 
	
	public function action_createcompany()
	{
        $this->template->content = View::factory('company/createcompany')
            ->bind('message', $message)
			->bind('errors', $errors);
		
		// If user have permission to create company
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$company = ORM::factory('company')
            		->values($_POST, array('name', 'objective', 'address', 'detail', 'email', 'website'));
			
			$company->user = $this->user;
			$company->company_type = ORM::factory('company_type', 1);
			
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$company->logo = 'logo';
			}
			
			try
			{
				$company->save();
                 
				// Redirect to company view
				Request::current()->redirect('company/view/'.$company->id);
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	} 

	public function action_view()
	{
        $this->template->content = View::factory('company/view')
            ->bind('company', $company);
		
		$company = ORM::factory('company', $this->request->param('id'));

		if (!$company->loaded())
		{
			throw new HTTP_Exception_404(__('Company id :id not found', array(':id' => 10)));
		}
	}
}