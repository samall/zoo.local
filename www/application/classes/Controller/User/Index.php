<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Index extends Controller_Frontend {


	// Show user homepage
	public function action_index()
	{
		$this->template->content = new View('user/register');
	}




} // End Welcome
