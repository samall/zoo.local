<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Text extends Controller_Frontend {

	public function action_index()
	{
		//$this->template->title = 'Hello World';
		//$this->template->content = 'Hello World';
		die;
	}
	
	public function action_show()
	{
		$id = $this->request->param('id');
		$page =  ORM::factory('text')->with('structure')->where('structure_id','=', $id)->find();
		$this->template->title = $page->structure->title;
		$this->template->content = new View('text');
		$this->template->content->data = ORM::factory('text')->with('structure')->where('structure_id','=', $id)->find();//->find($id);
	}
	

} // End Welcome
