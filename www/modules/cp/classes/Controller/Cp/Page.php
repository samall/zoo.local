<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Page extends Controller_Admin
{
	public function action_index()
	{
		
	}
	
	public function action_edit()
	{
		$this->auto_render = false;
		
		$view = new View('/page/edit');
		echo $view->render();
	}
	
}