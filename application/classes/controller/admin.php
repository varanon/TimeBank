<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Template {
	
	public function action_index()
	{
		// If user have permission to create company
		if (Auth::instance()->logged_in('admin'))
		{
			// show admin page
			$companies = ORM::factory('company')->find_all();
			$this->template->content = View::factory('admin/admin')->bind('companies', $companies);
		}
		else
		{
			Request::current()->redirect('/');
		}
	}
	
	
}