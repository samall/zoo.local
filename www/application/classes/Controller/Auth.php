<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Frontend {

	private $secret = array('AsWk!20fV', 'HuhdGy78U*j', 'u283hHIu09u8', '12ld97HF-k', 'djweh8YU'); 

	// Registration form
	public function action_index()
	{
		$this->template->title = "Регистрация пользователя";
		$this->template->content = new View('user/register');
	}
	
	public function action_create()
	{
		if (HTTP_Request::POST == $this->request->method())
        { 
			try{
				$user = new Model_User();
				$user->create_user($this->request->post(), array('username', 'password', 'email'));
				
				$hash = md5($this->request->post('username') . $this->request->post('email') . $this->secret[rand(0, count($this->secret)-1)]);
				$user->info->values(array('user_id'=>$user->id, 'hash'=>$hash, 'created'=>time()))->save();
				
				$this->template->content = new View('user/register_success');
				$this->template->content->user = $this->request->post();

			}catch(ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = 'Пожалуйста проверьте правильность заполнения полей';
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
				$this->template->title = 'Ошибки при регистрации пользователя';
				$this->template->content = new View('user/register');
				$this->template->content->message = $message;
				$this->template->content->errors = $errors;
            }
		}else{
			
		}
	}
	
	public function action_confirm()
	{
		$code = $this->request->param('confirm');
		$user = ORM::factory('user')->with('info')->where('hash','=', $code)->find();
		$confirm = false;
		if($user->loaded())
		{
			if($user->active != 1)
			{
				$user = new Model_User($user->id);
				$user->remove('roles');
				$user->add('roles', 1);
				$user->active = 1;
				$user->save();
				$confirm = true;
				$message = 'Активация выполнена успешно';
			}else{
				$message = 'Активация уже выполнена';
			}
		}else{
			$message = 'Пользователь не опознан';
		}
		$this->template->content = new View('user/register_success');
		$this->template->content->confirm = $confirm;
		$this->template->content->message = $message;
	}
	
	public function action_remember()
	{
		if (HTTP_Request::POST == $this->request->method())
        {



			// send email here
			$this->template->title = "Восстановление учетной записи. Успешно";
			$this->template->content = new View('user/remember_success');
		}else{
		
			//show form
			$this->template->title = "Восстановление учетной записи";
			$this->template->content = new View('user/remember');
		}
		
	}


	public function action_login()
	{	
		if($this->auth->logged_in())
		{
			HTTP::redirect('/user/lk/profile/'.$this->user->pk());
			die("Redirect failed");
		}
		
		$error = '';
		// Validate the post    
		if (HTTP_Request::POST == $this->request->method())
		{
			$remember = array_key_exists('remember_me', $this->request->post()) ? (bool)$this->request->post('remember_me') : false;
			$user = $this->auth->login($this->request->post('username'), $this->request->post('password'), $remember);
				
			if($user)
			{
				HTTP::redirect('/');
				die;
			}else{
				$error = "Неверная учетная запись";
			}
		}
		
		$this->template->content = new View('user/login');
		$this->template->title = "Ошибка входа";
		$this->template->content->error = $error;
	}


	public function action_logout()
	{
		$this->auth->logout();
		HTTP::redirect(Route::get('default')->uri(array('controller'=>'Auth', 'action'=>'login')));
	}
	
	

} // End Welcome
