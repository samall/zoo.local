<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Article extends Controller_Frontend {

	public function action_index()
	{
		// ¬ыбрать по п€ть новых новостей и статей
		$data = array();
		$themes = ORM::factory('Structure')->where('module','=','article')->find_all();
		
		foreach($themes as $t){
		
			$data[$t->alias] = ORM::factory('Article')->where('structure_id', '=', $t->pk())->and_where('published','=', '1')->limit(10)->find_all();
		}
		
		$this->template->content = new View('article/index');
		$this->template->content->themes = $themes;
		$this->template->content->data = $data;
	}
	
	public function action_show()
	{
		$id = $this->request->param('id');
		
		$page = ORM::factory('Article')->where('alias','=', $id)->find();
		
		$this->template->content = new View('article/show');
		$this->template->content->data = $page;
	}
	

} // End Welcome
