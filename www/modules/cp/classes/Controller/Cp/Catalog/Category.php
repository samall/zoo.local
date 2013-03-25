<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Catalog_Category extends Controller_Admin
{
	public function action_index()
	{
		$this->set_style('css/jquery.contextMenu.css');
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');
	
		$c = new Model_Catalog_Category();
		
		$t = $c->tables_exists();
	
		$this->template->title = "Категории каталога";
		$this->template->content = new View('catalog/category/index');
		$this->template->content->data = ORM::factory("Catalog_Category")->find_all();
	}
	
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		
		$this->template->title = "Редактирование категории";
		$this->template->content = new View('catalog/category/edit');
		$this->template->content->edit = ORM::factory("Catalog_Category", $id);
	}
	
	public function action_save()
	{
		$id = $this->request->param('id');
	
		$cat = new Model_Catalog_Category($id);
		$cat->values($this->request->post(), array('name', 'alias'));
		$cat->save();
		HTTP::redirect('/cp/catalog_category/index');
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
	
		$cat = new Model_Catalog_Category($id);
		$cat->delete();
		HTTP::redirect('/cp/catalog_category/index');
	}

	public function action_configure()
	{
		$id = $this->request->param('id');

		$c = new Model_Catalog_Category($id);
		$c->create_table();
		
		HTTP::redirect('/cp/catalog_category/index');
	}


	
}

