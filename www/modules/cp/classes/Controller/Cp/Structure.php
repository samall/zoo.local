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

	
	public function action_edit()
	{
		$id = $this->request->param('id');
		
		$this->template->title = "Структура";
		$this->template->content = new View('structure/edit');
		$this->template->content->edit = new Model_Structure($id);
		$struct = new Model_Structure();
		$this->template->content->struct = $struct->fulltree(1);
		
	}
	
	
	public function action_save()
	{
		$id = $this->request->param('id');
		$structure = new Model_Structure($id);
		$post = array_merge($this->request->post());
		$s = $structure->save_node($this->request->post('parent_id'), $post);

		HTTP::redirect('/cp/structure/index');
	}
	
	
	public function action_moveup()
	{
		$id = $this->request->param('id');
		$this->move($id, 'up');
	}
	
	public function action_movedown()
	{
		$id = $this->request->param('id');
		$this->move($id, 'down');
	}
	
	
	public function move($id, $direct)
	{
		$node = new Model_Structure($id);
		
		$offset = $direct == 'up' ? $node->lft-2 : $node->lft+2;
		
		//$t = ORM::factory('Structure')->where('parent_id','=', $node->parent_id)->where('scope', '=', $node->scope)->where('lft', "=", $offset)->find();
		
		if($node->loaded())
		{
		
			if($direct == 'up'){
				$t = $node->is_not_first();
				
				$node->move_to_prev_sibling($t);
			}elseif($direct == 'down'){
			
				$t = $node->is_not_last();
				
				$node->move_to_next_sibling($t);
			}
		}
		
		HTTP::redirect('cp/structure/index/');
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
