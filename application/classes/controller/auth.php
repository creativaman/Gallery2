<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

	public $template = 'root';

	public function action_index()
	{
		$this->template->content = View::factory('auth');
	}

} // End Auth
