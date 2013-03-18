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
	
		$values = $item->get_values();
		// получить шаблон по категории
		$t = new Model_Catalog_Template();
		$tpl = $t->fulltree($item->catalog_category_id);

		$data = $item->get_values();
		$res = array();
		
		foreach($tpl as $row)
		{
			if($row->rgt-$row->lft > 1)
			{
				$childs = array();
				foreach($tpl as $child)
				{
//				echo $data[$child->id];
				
					if(!empty($data[$child->id]))
					{
						$value = $data[$child->id];
					}else{
						$value = '';	
					}
					
					if($child->parent_id == $row->pk() && $value != '')
					{
						$childs[] = $child;
					}
				}
				
				if(count($childs)>0)
				{
					$res[] = $row;
					array_merge($res, $childs);
				}
			}else{
				$res[] = $row;
			}
		}
	
		$this->template->content = new View('catalog/details');
		$this->template->content->tpl = $res;
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