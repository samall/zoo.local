<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Frontend {

	public function action_index()
	{
		if(!empty($_GET['limit'])){
			Session::instance()->set('pagelimit', (int)$_GET['limit']);
			$limit = (int)$_GET['limit'];
		}else{
			$limit = Session::instance()->get('pagelimit') ? : 25;
			Session::instance()->set('pagelimit', 25);
		}

		$sort = !empty($_GET['sort']) ? (int)$_GET['sort'] : '';
		
		switch($sort){
			case 'date':
				$order = 'create';
			break;
			case 'square':
				$order = 'square';
			break;
			case 'price':
				$order = 'price';
			break;
			default: $order = 'id';
		}
		
		
		$page = !empty($_GET['page']) ? (($_GET['page']-1)*$limit) : 0;
		$count = ORM::factory('Catalog')->where('published', '=', '1')->count_all();
		$pagination = new Pagination(array(
			'current_page'      => array('source' => 'query_string', 'key' => 'page'),
			'total_items'       => $count,
			'items_per_page'    => $limit,
			'view'              => 'pagination/floating',
			'auto_hide'         => TRUE,
			'first_page_in_url' => FALSE,
		));
	
	
		$catalog = ORM::factory('Catalog')->where('published', '=', '1')->order_by($order, 'DESC')->offset($page)->limit($limit)->find_all();
	
		$this->template->content = new View('index');
		$this->template->content->active_cat = null;
		$this->template->content->dataset = $catalog;
		$this->template->content->catalog_categories = ORM::factory('Catalog_Category')->find_all();
		$this->template->content->pagination = $pagination->render();
	}
	
	

} // End Welcome
