<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cp_User extends Controller_Admin {

	public function action_index()
	{
		$this->set_style('css/jquery.contextMenu.css');
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');
	
	
		$this->template->content = new View('user/user_list');
		
		$users = ORM::factory('User');
		
		$pagination = Pagination::factory(array(
            'total_items'    => $users->count_all(),
			'items_per_page'    => 20,
			'view'              => 'pagination/clear',
			'auto_hide'         => FALSE,
			'first_page_in_url' => FALSE,
        ));
		
		$this->template->title = 'Пользователи';
		$this->template->content->list = $users->order_by('username')->limit($pagination->items_per_page) 
                ->offset($pagination->offset)
                ->find_all();
		$this->template->content->pagination = $pagination;
	}

	public function action_lastest()
	{
		
		$c =ORM::factory('user')
			->with('info')
			->order_by('active', 'DESC')
			->order_by('created', 'ASC')->count_all();
		
		$pagination = Pagination::factory(array(
            'total_items'    => $c,
			'items_per_page'    => 20,
			'view'              => 'pagination/basic',
			'auto_hide'         => FALSE,
			'first_page_in_url' => FALSE,
        ));
		
		
		$this->template->content = new View('user/user_list');
		$this->template->content->list = ORM::factory('user')
			->with('info')
			->order_by('active', 'DESC')
			->order_by('created', 'ASC')
			->limit($pagination->items_per_page) 
            ->offset($pagination->offset)
			->find_all();
		
		$this->template->content->curr_date = strtotime(date('d.m.Y',time()));
		$this->template->content->pagination = $pagination;
	}
	
	
	public function action_edit()
	{
		$id = $this->request->param('id');

		if($id){
			$user = ORM::factory('User')->with('info')->where('id', '=', $id)->find();
		}else{
			$user = new Model_User();
		}		
		$roles = ORM::factory('Role')->find_all();

		$user_roles = $user->roles->find_all()->as_array();
		$ur = array();
		foreach($user_roles as $row){
			$ur[$row->id] = $row->id;
		}

		$this->template->title = 'Пользователь: редактирование';
		$this->template->content = new View('user/edit');
		$this->template->content->edit = $user;
		$this->template->content->user_roles = $ur;
		$this->template->content->roles = $roles;
	}
	
	public function action_save()
	{
		$id = $this->request->param('id');
	
		if (HTTP_Request::POST == $this->request->method())
        {          
            try {
				$user = new Model_User($id);
				if($user->loaded())
				{
					$user->update_user($this->request->post(), array('username', 'password', 'email'));
					$user->remove('roles');
					$user->add('roles', $_POST['roles']);


					$user->info->values(array(
						'user_id' => $user->pk(),
						'modified' => time(),
						'name'	=> $this->request->post('name'),
						'company'	=> $this->request->post('company'),
						'phone'	=> $this->request->post('phone'),
						'sex'	=> $this->request->post('sex'),
						'info'	=> $this->request->post('info'),
						))->where('user_id','=', $user->pk())->update();
					
				}else{

					$user->create_user($this->request->post(), array('username', 'password', 'email'));
					 // Grant user login role
					$user->add('roles', $_POST['roles']);
					$user->info->values(array(
						'user_id' => $user->pk(),
						'created' => time(),
						'name'	=> $this->request->post('name'),
						'company'	=> $this->request->post('company'),
						'phone'	=> $this->request->post('phone'),
						'sex'	=> $this->request->post('sex'),
						'info'	=> $this->request->post('info')
						//'active'=> true
						))->save();
				}   
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

		HTTP::redirect('/cp/user/index');
	}
	
	
	public function action_profile()
	{
		$id = $this->request->param('id');
		$this->template->content = new View('user/profile');
		$this->template->content->user = ORM::factory('user')->with('info')->where('id','=', $id)->find();
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		$user = new Model_User($id);
		$user->delete();
	
		HTTP::redirect('/cp/user/index');
	}
	
	public function action_active()
	{
		$id = $this->request->param('id');
		$user = new Model_User($id);
		$user->active = $user->active ? false : true;
		$user->save();
		
		HTTP::redirect('/cp/user/index');
	}
	
	
} // End Welcome
