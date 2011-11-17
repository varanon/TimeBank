<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {

	public $user;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render === TRUE)
		{
			$this->template->bind('user', $this->user);
			$this->user = Auth::instance()->get_user();
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			if (isset($this->template->content))
			{
				$this->template->content->bind('user', $this->user);
			}
		}

		parent::after();
	}

} // End Controller_Template
