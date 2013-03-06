<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Frontend extends Controller_Template
{
	public $template = 'template';
	protected $auth, $a2;
	
	public function before()
	{
		/**
		 * 	Установим тему админпанели
		 * */
		Theme::set_theme('default'); 
		parent::before();
	
		$this->a2 = A2::instance('a2acl');
		$this->auth = $this->a2->auth();
		$this->user = $this->auth->get_user();
		$this->template->set_global('user', $this->user);

		$this->template->search_bar = '';
		$this->template->title = '';
		
		/**
		*	Получаем верхнее и нижнее меню
		*/
		$this->template->top_menu = ORM::factory('Structure')->where('alias','=', '[top-menu]')->find()->children();
		$this->template->footer_menu = ORM::factory('Structure')->where('alias','=', '[footer-menu]')->find()->children();
		
		$this->premium_top();
		$this->premium_right();
		
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
	
	
	
	/**
	*	Block Premium-top
	*
	*/
	public function premium_top()
	{
		$res = ORM::factory('Catalog')->get_premium(6,0);

		$block = new View('_blocks/premium_top');
		$block->premium = $res;
		$this->template->premium_top = $block->render();
	}
	
	public function premium_right()
	{
		$res = ORM::factory('Catalog')->get_premium(6,6);

		$block = new View('_blocks/premium_right');
		$block->premium = $res;
		$this->template->premium_right =  $block->render();
	}
	
	
	
	
}
