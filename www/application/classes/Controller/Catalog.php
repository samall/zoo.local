<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Frontend {

	public function action_index()
	{
		
	}
		
	/**
	*	Объявление подробно
	*/
	public function action_details()
	{
		$id = $this->request->param('id');
		$item = new Model_Catalog($id);
	
		if(!$item->loaded() || $item->published == 0){ die("Такого объявления не существует (сделать нормальную страницу)"); }
	
		$this->template->content = new View('catalog/details');
		$this->template->content->item = $item;
		$this->template->content->owner = new Model_User($item->user_id);
	}
	
	/**
	*	Все Объявления пользователя
	*/
	public function action_fromuser()
	{
		$id = $this->request->param('id');
		$data = ORM::factory('Catalog')->where('user_id', '=', $id)->order_by('id', 'DESC')->find_all();
		
		$this->template->content = new View('catalog/list');
		$this->template->content->dataset = $data;
		$this->template->content->owner = new Model_User((int)$id);
	}

	
	
} 