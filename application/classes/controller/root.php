<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Root extends Controller_Template {

	public $template = 'root';

	public function action_index()
	{
		$this->template->content = View::factory('article');
	}

	public function action_1()
	{
		$this->template->content = '1';
	}

} // End Root
