<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Frontend {

	public function action_index()
	{
		
	}
	
	
	public function action_category()
	{
		$cat = (int)$this->request->param('id');
		
		$catalog = ORM::factory('Catalog')->where('published', '=', '1')->where('catalog_category_id', '=', $cat)->order_by('id', 'DESC')->limit(25)->find_all();
		$this->template->content = new View('index');
		$this->template->content->dataset = $catalog;
		$this->template->content->active_cat = $cat;
		$this->template->content->catalog_categories = ORM::factory('Catalog_Category')->find_all();
	}
	
	
		
	/**
	*	Объявление подробно
	*/
	public function action_details()
	{
		$id = $this->request->param('id');
		$item = new Model_Catalog($id);
	
		if(!$item->loaded() || $item->published == 0){ die("Такого объявления не существует (сделать нормальную страницу)"); }
	
		// получить шаблон по категории
		$t = new Model_Catalog_Template();
		$tpl = $t->fulltree($item->catalog_category_id);
		$data = $item->get_values();
	
		$this->template->content = new View('catalog/details');
		$this->template->content->tpl = $tpl;
		$this->template->content->data = $data;
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