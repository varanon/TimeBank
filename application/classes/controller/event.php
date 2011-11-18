<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Event extends Controller_Template {
	
	public function action_create()
	{
        $this->template->content = View::factory('event/create')
            ->bind('locations', $locations)
            ->bind('message', $message)
			->bind('errors', $errors);
		
		// If user have permission to create company
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		$locations_orm = ORM::factory('location')->find_all();
		$locations = array();
		foreach ($locations_orm as $location)
		{
			$locations[$location->id] = $location->province;
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event = ORM::factory('event')
            		->values($_POST, array('name', 'open_date', 'end_date', 'status', 'phone', 'contractor_name',
										   'user_need_count', 'time_cost', 'detail', 'location_id'));
			
			$event->company = ORM::factory('company')
								->where('user_id', '=', $this->user->id)
								->find();
			
			/*
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$company->logo = 'logo';
			}
			*/

			try
			{
				$event->save();
                 
				// Redirect to event view
				Request::current()->redirect('event/view/'.$event->id);
				
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
        $this->template->content = View::factory('event/view')
            ->bind('event', $event);
		
		$event = ORM::factory('event', $this->request->param('id'));

		if (!$event->loaded())
		{
			throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => 10)));
		}
	}
}