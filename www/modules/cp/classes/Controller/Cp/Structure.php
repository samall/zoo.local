<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cp_Structure extends Controller_Admin
{
	public function action_index()
	{
		$struct = new Model_Structure();
		$data = $struct->fulltree(1);
		
		$this->set_style('js/jquery-treetable/src/stylesheets/jquery.treeTable.css');
		$this->set_style('js/jquery-treetable/doc/stylesheets/master.css');
		$this->set_style('css/jquery.contextMenu.css');
		
		$this->set_script('js/jquery-treetable/src/javascripts/jquery.treeTable.js');
		$this->set_script('js/jquery.contextMenu.js');
		$this->set_script('js/jquery.ui.position.js');
		
		$this->template->title = "Структура";
		$this->template->content = new View('structure/structure');
		$this->template->content->data = $data;
	}

	public function action_save()
	{
		$id = $this->request->param('id');
		print_r($_POST);
		die;
	
	}
	
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		
		if(!empty($id))
		{
			$node = new Model_Structure($id);
			$module = $node->module;
			
			if($module == 'text')
			{
				$text = new Model_Text($id);
				
				echo $text->loaded();
				
				if($text->loaded()){
					$text->delete();
				}
			}
			
			$node->delete();
		}
	
		HTTP::redirect('/cp/structure/index');
	}
	
	
	
}
