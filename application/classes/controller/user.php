<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Template {
 
    public function action_index()
    {
        $this->template->content = View::factory('user/info')
            ->bind('user', $user);
         
        // Load the user information
        $user = Auth::instance()->get_user();
         
        // if a user is not logged in, redirect to login page
        if (!$user)
        {
            Request::current()->redirect('user/login');
        }
    }
 
    public function action_create() 
    {
        $this->template->content = View::factory('user/create')
            ->bind('errors', $errors)
            ->bind('message', $message);
             
        if (HTTP_Request::POST == $this->request->method()) 
        {           
            try {
         
                // Create the user using form values
                $user = ORM::factory('user')->create_user($this->request->post(), array(
                    'username',
                    'password',
                    'email'            
                ));
                 
                // Grant user login role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));
                 
                // Reset values so form is not sticky
                $_POST = array();
                 
                // Set success message
                $message = "You have added user '{$user->username}' to the database";
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = 'There were errors, please see form below.';
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }
    }
     
    public function action_login() 
    {
        $this->template->content = View::factory('user/login')
            ->bind('message', $message);
             
        if (HTTP_Request::POST == $this->request->method()) 
        {
            // Attempt to login user
            $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
            $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
             
            // If successful, redirect user
            if ($user) 
            {
                Request::current()->redirect('user/index');
            } 
            else
            {
                $message = 'Login failed';
            }
        }
    }
     
    public function action_logout() 
    {
        // Log user out
        Auth::instance()->logout();
         
        // Redirect to login page
        Request::current()->redirect('user/login');
    }
	
	
	///////////////////////////////////////////
	// Below is test/snippet function only
	
	public function action_test()
	{
        $this->template->content = View::factory('user/info')
            ->bind('user', $user);
         
        // Load the user information
        $user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
        if (!$user)
        {
            Request::current()->redirect('user/login');
        }
	}
	
	public function action_company()
	{
        $this->template->content = View::factory('user/info')
            ->bind('user', $user);
         
        // Load the user information
        $user = Auth::instance()->get_user();
		
		$company = ORM::factory('company');
		$company->user = $user;
		$company->objective = "new company";
		$company->company_type = ORM::factory('company_type', 1);
		$company->name = "new company";
		$company->address = "new company";
		$company->detail = "new company";
		$company->email = "a@a.com";
		//$company->website = "http://zanroo.com";

		try
        {
            $company->save();
            echo 'success';
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('models');
			print_r($errors);
        }
		
		// if a user is not logged in, redirect to login page
        if (!$user)
        {
            Request::current()->redirect('user/login');
        }		
	}
	
	public function snippet()
	{
		// Create an timebank and attach it to the user (one-to-many)
		$timebank = ORM::factory('user_timebank')->values(array(
			'approve'       => 5,
			'status'  		=> 22,
			'user_id'		=> $user->id, // sets the fk
		));
		$timebank->save();
		
		///////////////
		
		// Create skill
		$skill = ORM::factory('skill');
		$skill->name = "programmer";
		$skill->description = "programmer description";
		$skill->save();
		
		// Attach skill to user (many-to-many)
		$user->add('skills', ORM::factory('skill', array('name' => 'programmer')));

		///////////////

		// Create occupation
		$occupation = ORM::factory('occupation');
		$occupation->name = "developer";
		$occupation->description = "developer description";
		$occupation->save();
		
		// Attach occupation to user (many-to-many)
		$user->add('occupations', ORM::factory('occupation', array('name' => 'developer')));
		
		///////////////

		// Create location
		$location = ORM::factory('location');
		$location->name = "laksi";
		$location->description = "laksi description";
		$location->save();
		
		// Attach location to user (many-to-many)
		$user->add('locations', ORM::factory('location', array('name' => 'laksi')));
		
		///////////////

		// Create activity
		$activity = ORM::factory('activity');
		$activity->name = "pack sand";
		$activity->description = "pack description";
		$activity->save();
		
		// Attach activity to user (many-to-many)
		$user->add('activities', ORM::factory('activity', array('name' => 'pack sand')));
		
		///////////////

		// Create company
		$company_type = ORM::factory('company_type');
		$company_type->name = 'private sector';
		$company_type->save();
		
		$company = ORM::factory('company');
		$company->user = $user;
		$company->objective = "objobj";
		$company->company_type = $company_type;
		$company->save();
		
		///////////////

		// Create event
		$event = ORM::factory('event');
		$event->phone = "089";
		$event->location = ORM::factory('location', 4);
		$event->company = ORM::factory('company', 2);
		$event->save();
		
	}
 
}