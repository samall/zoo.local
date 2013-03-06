<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Index extends Controller_Admin
{
	public function action_index()
	{
		$time = time() - 86400;

		// count new users
		$new_users = ORM::factory('user')->with('info')->where('created', '<=', $time)->or_where('active','=','0')->count_all();
		
		$this->template->title = 'Начало';
		$this->template->content = new View('dashboard');
		$this->template->content->new_users = $new_users;
	}
	
}
