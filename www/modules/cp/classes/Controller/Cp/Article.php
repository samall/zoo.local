<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Article extends Controller_Admin
{
	public function action_index()
	{
		$theme_id = $this->request->param('id');

		$this->set_style('js/jquery-treetable/doc/stylesheets/master.css');
		$this->set_style('css/jquery.contextMenu.css');
	
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');

		$this->template->title = 'Статьи/новости';
		$this->template->content = new View('article/index');
		$this->template->content->curr = $theme_id;
		$this->template->content->themes = ORM::factory('Structure')->where('module','=','article')->find_all();
		
		$data = ORM::factory('Article');
		if($theme_id > 0){
			$data = ORM::factory('Article')->where('structure_id','=', $theme_id)->find_all();
		}
		else{
			$data = ORM::factory('Article')->find_all();
		}
		
		$this->template->content->data = $data;
		
	}
	
	public function action_edit()
	{
		$this->set_style('js/elrte-1.3/css/smoothness/jquery-ui-1.8.13.custom.css');
		$this->set_style('js/elrte-1.3/css/elrte.min.css');
		$this->set_script('js/elrte-1.3/js/jquery-ui-1.8.13.custom.min.js');
		$this->set_script('js/elrte-1.3/js/elrte.min.js');
		$this->set_script('js/elrte-1.3/js/i18n/elrte.ru.js');
	
		$id = $this->request->param('id');
		
		$a = new Model_Article($id);

		$this->template->title = 'Статьи/новости: редактирование';
		$this->template->content = new View('article/edit');
		$this->template->content->edit = $a;
		$this->template->content->struct = ORM::factory('Structure')->where('module','=','article')->find_all();
	}


	public function action_save()
	{
		$id = $this->request->param('id');
		$a = new Model_Article($id);
		$a->values($this->request->post(), array('structure_id', 'title', 'alias', 'pub_date', 'published', 'content'));
		$a->save();
		
		if(!empty($_FILES['image']))
		{
			File::set_path('assets/articles/');
			File::upload_file($_FILES['image'], $a->pk(), 'image');
		}
		
		HTTP::redirect('/cp/article/index');
	}
	
}
