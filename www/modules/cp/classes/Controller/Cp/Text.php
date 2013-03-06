<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Text extends Controller_Admin
{
	public function action_index()
	{
		$this->set_style('css/jquery.contextMenu.css');
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');
	
		$text = new Model_Text();
		$this->template->title = 'Текст';
		$this->template->content = new View('text/index');
		$this->template->content->data = $text->with('structure')->find_all();
		
	}
	
	public function action_edit()
	{
		$this->set_style('js/elrte-1.3/css/smoothness/jquery-ui-1.8.13.custom.css');
		$this->set_style('js/elrte-1.3/css/elrte.min.css');
		$this->set_script('js/elrte-1.3/js/jquery-ui-1.8.13.custom.min.js');
		$this->set_script('js/elrte-1.3/js/elrte.min.js');
		$this->set_script('js/elrte-1.3/js/i18n/elrte.ru.js');
	
		$id = $this->request->param('id');
		
		$text = new Model_Text($id);

		$this->template->title = 'Текст: редактирование';
		$this->template->content = new View('structure/edit');
		$this->template->content->action = '/cp/text/save/'; // ACTION 
		$this->template->content->title = 'Редактирование текста';
		$this->template->content->module = new View('text/edit');
		$this->template->content->module->text = $text;
		$this->template->content->edit = new Model_Structure($id);
		$this->template->content->struct = ORM::factory('structure')->fulltree(1);
	}


	public function action_save()
	{
		$id = $this->request->param('id');
		
		$structure = new Model_Structure($id);
		
		$post = array_merge(array('module'=>'text'), $this->request->post());
		
		$s = $structure->save_node($this->request->post('parent_id'), $post);
	
		$text = new Model_Text($s->pk());
		$text->structure_id = $s->pk();
		$text->content = $this->request->post('content');
		$text->save();
		HTTP::redirect('/cp/text/index');
	}
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		$s = new Model_Structure($id);
		$text = new Model_Text($s->pk());
		$s->delete();
		$text->delete();
		HTTP::redirect('/cp/text/index');
	}
	
	
}
