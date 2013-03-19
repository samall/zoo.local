<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Frontend {

	public function action_index()
	{
		$catalog = ORM::factory('Catalog')->where('published', '=', '1')->order_by('id', 'DESC')->limit(25)->find_all();
	
		$this->template->content = new View('index');
		$this->template->content->active_cat = null;
		$this->template->content->dataset = $catalog;
		$this->template->content->catalog_categories = ORM::factory('Catalog_Category')->find_all();
	}
	
	

} // End Welcome
