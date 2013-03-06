<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Lk extends Controller_Frontend {

	public $avatar_path = '/assets/users/avatars/';

	public function action_index()
	{
		$this->template->content = new View('user/lk/index');
	}
	
	public function action_profile()
	{
		$user = ORM::factory('user')->with('info')->where('id','=', $this->user)->find();
		$this->template->title = "Личный кабинет > Личные данные";
		$this->template->content = new View('user/lk/edit_profile');
		$this->template->content->edit = $user;
		
		$this->template->content->avatar_path = is_file($_SERVER['DOCUMENT_ROOT'] . $this->avatar_path . $user->info->avatar) ? 
													$this->avatar_path . $user->info->avatar : false;
	}
	
	public function action_save_profile()
	{
		$id = $this->user->pk();
	
		if (HTTP_Request::POST == $this->request->method())
        {          
            try {
				$user = new Model_User($id);
				$filename = false;
				
				if($user->loaded())
				{
					$user->update_user($this->request->post(), array('username', 'password', 'email'));
					
					if(!empty($_FILES['avatar']))
					{
						File::set_path($this->avatar_path);
						$filename = File::upload_file($_FILES['avatar'], md5($this->request->post('name') .'_'. $user->pk()), 'image');
					}
					
					$user->info->values(array(
						'modified' => time(),
						'name'	=> $this->request->post('name'),
						//'company'	=> $this->request->post('company'),
						'phone'	=> $this->request->post('phone'),
						'phone2'	=> $this->request->post('phone2'),
						'site'	=> $this->request->post('site'),
						'skype'	=> $this->request->post('skype'),
						'icq'	=> $this->request->post('icq'),
						
						'avatar'	=> $filename,
						'info'	=> $this->request->post('info'),
						))->where('user_id','=', $id)->update();

					// Reset values so form is not sticky
					$_POST = array();
                 
					// Set success message
					$message = "You have added user '{$user->username}' to the database";
                }
            }catch(ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = 'There were errors, please see form below.';
        
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }

		HTTP::redirect('/user/lk/profile');
	}
	

} 