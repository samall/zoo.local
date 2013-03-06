<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Frontend {

	public function action_index()
	{
		$catalog = ORM::factory('Catalog')->where('published', '=', '1')->order_by('id', 'DESC')->limit(25)->find_all();
	
		$this->template->content = new View('index');
		$this->template->content->active_type = null;
		$this->template->content->dataset = $catalog;
		$this->template->content->catalog_types = ORM::factory('Catalog_Type')->find_all();
	}
	
	public function action_type()
	{
		$type = (int)$this->request->param('id');
		
		$catalog = ORM::factory('Catalog')->where('published', '=', '1')->where('type_object', '=', $type)->order_by('id', 'DESC')->limit(25)->find_all();
		$this->template->content = new View('index');
		$this->template->content->dataset = $catalog;
		$this->template->content->active_type = $type;
		$this->template->content->catalog_types = ORM::factory('Catalog_Type')->find_all();
	}

} // End Welcome
