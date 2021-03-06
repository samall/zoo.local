<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin extends Controller_Template
{
	public $template = 'template';
	protected $auth, $a2;
	
	public function before()
	{
		/**
		 * 	Установим тему админпанели
		 * */
		Theme::set_theme('mightyadmin'); 
		parent::before();
	
		$this->a2 = A2::instance('a2acl');
		$this->auth = $this->a2->auth();
		
		if(!$this->auth->logged_in('admin'))
		{
			if($this->request->action() != 'login')
			{
				HTTP::redirect(Route::get('default')->uri(array('controller'=>'admin', 'action'=>'login')));
				exit;
			}
		}
		
		$this->user = $this->auth->get_user();
		$this->template->set_global('user', $this->user);
		
		$this->template->styles = array();
		$this->template->scripts = array();
		
		/**
		*	Load left admin menu.
		*/

		$this->template->breadcrumbs = $this->breadcrumbs();
		$this->template->left_menu = new View('left_menu');
		$this->template->left_menu->items = $c = Kohana::$config->load('cpmenu');
	}



	public function breadcrumbs()
	{
		$path = array();
		$uri = Request::current()->uri();
		$uri = '/' . $uri;
		$c = Kohana::$config->load('cpmenu');

		$sections = array_values($c->as_array());

		foreach($sections as $section)				
		{
			foreach($section as $row)
			{
				if(!empty($row['childs']))
				{
					foreach($row['childs'] as $child)
					{
						if($child['link'] == $uri){
							$path[] = $child; 
					 		break;
						}
					}
				}

				if(!empty($path))
				{
					$path[] = $row;
					break 2;
				}else{

					if($row['link'] == $uri){
						$path[] = $row;
						break 2;
					}
				}
			}
		}
		return array_reverse($path);
	}

	
	
	public function set_style($path)
	{
		$key = basename($path);
		$this->template->styles[] = $path;
	}
	
	public function set_script($path)
	{
		$key = basename($path);
		$this->template->scripts[$key] = $path;
	}
	
	
	public function action_index(){ die("die"); }
	
	
	public function action_login()
	{
		$this->auto_render = false;
		
		if($this->auth->logged_in('admin'))
		{
			HTTP::redirect(Route::get('cp')->uri(array('contoller'=>'index', 'action'=>'index')));
			die("Redirect failed");
		}
		
		$view = View::factory('login')
			->bind('errors', $errors);
	
		// Validate the post    
		if (HTTP_Request::POST == $this->request->method())
		{
		
			$remember = array_key_exists('remember_me', $this->request->post()) ? (bool)$this->request->post('remember_me') : false;
			$user = $this->auth->login($this->request->post('username'), $this->request->post('password'), $remember);
				
			if($user)
			{
				HTTP::redirect(Route::get('cp')->uri(array('controller'=>'index', 'action'=>'index')));
				die;
			}else{
				$errors = "Неверная учетная запись";
			}
		}
		$this->response->body($view->render());
	}
	
	public function action_logout()
	{
		$this->auth->logout();
		HTTP::redirect(Route::get('default')->uri(array('controller'=>'admin', 'action'=>'login')));
	}
}
