<?php


class Controller_Cp_User_Grants extends Controller_Admin
{

	public function action_index()
	{
		$this->action_roles();
	}
	
	public function action_roles()
	{
		$this->template->content = new View('user/roles');
		$this->template->content->roles = ORM::factory('role')->find_all();
	}
	
	public function action_edit_role()
	{
		$id = $this->request->param('id');
		$this->template->content = new View('user/roles_edit');
		$this->template->content->edit = new Model_Role($id);
		//$this->template->content->resourses = $this->config->get('resourses');
	}
	
	public function action_save_role()
	{
		$id = $this->request->param('id');
		$role = new Model_Role($id);
		$role->values($_POST)->save();
		
		HTTP::redirect('/cp/user/grants/index');
	}
	
	/*
	*/
	public function action_resourses()
	{
		$resourses = $this->config->get('resourses');
		$this->template->content = View::factory('user/resourses')
						->bind('resourses', $resourses);
	}
	
	


}

?>