<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Catalog_Template extends Controller_Admin
{
	public function action_index()
	{
		$this->set_style('css/jquery.contextMenu.css');
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');
	
	
		$cat_id = $this->request->param('id');
		Session::instance()->set('category_id', $cat_id);
		// получить шаблон по категории
		$t = new Model_Catalog_Template();
		$template = $t->fulltree($cat_id);
		
		$this->template->title = 'Параметры объектов в категории';
		$this->template->content = new View('catalog/template/index');
		$this->template->content->dataset = $template;
		
	}
	
	public function action_edit()
	{
		$id = $this->request->param('id');
		$cat_id = Session::instance()->get('category_id');
	
		$t = new Model_Catalog_Template();
	
		$this->template->title = 'Редактирование';
		$this->template->content = new View('catalog/template/edit');
		$this->template->content->edit = ORM::factory('Catalog_Template', $id);
		$this->template->content->cat_id = $cat_id;
		$this->template->content->tree = $t->where('scope', '=', $cat_id)->and_where('lvl', '<=', 2)->order_by('lft')->find_all();
	}
	
	public function action_add()
	{
		$parent_id = $this->request->param('id');
		$cat_id = Session::instance()->get('category_id');
		$t = new Model_Catalog_Template();
		$this->template->title = 'Редактирование';
		$this->template->content = new View('catalog/template/edit');
		$this->template->content->edit = ORM::factory('Catalog_Template');
		$this->template->content->parent_id = $parent_id;
		$this->template->content->cat_id = $cat_id;
		$this->template->content->tree = $t->where('scope', '=', $cat_id)->and_where('lvl', '<=', 2)->order_by('lft')->find_all();
	}
	
	
	public function action_save()
	{
		$id = $this->request->param('id');
		$cat_id = Session::instance()->get('category_id');
		
		//make scope if not_exists
		$root = new Model_Catalog_Template();
		if(!$root->root($cat_id)->pk())
		{
			$root->insert_as_new_root($cat_id);
			$parent_id = $root->pk();
		}else{
			$parent_id = $this->request->post('parent_id');
			
			if(!$parent_id) throw new Exception('Parent ID is not defined');
		}
		
		$t = new Model_Catalog_Template($id);
		$t->save_node($parent_id, $this->request->post());
		
		HTTP::redirect('cp/catalog_template/index/'.$cat_id);
	}

	
}

