<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Board extends Controller_Frontend {

	protected $tmp_image_path = '/tmp_images/';

	public function action_index()
	{
		$catalog = ORM::factory('Catalog')->where('user_id', '=', $this->user->id)->find_all();
	
		$this->template->content = new View('user/board/myboard');
		$this->template->content->dataset = $catalog;
	}
		
		
	public function action_edit()
	{
		$id = $this->request->param('id');
		$catalog = new Model_Catalog($id);
		
		$this->template->content = new View('user/board/edit_advert');
		$this->template->content->edit = $catalog;
		$this->template->content->path = $catalog->image_path;
		$this->template->content->images = $catalog->images();
		$this->template->content->region = array('region'	=> null, 'subregion' => null);
		
		if($catalog->loaded()){
			$this->template->content->region = array(
				'region'	=> ORM::factory('Geo_Region')->where('id', '=', $catalog->geo_region_id)->find()->name,
				'subregion' => ORM::factory('Geo_City')->where('id', '=', $catalog->geo_city_id)->find()->name
			);
			
			$t = new Model_Catalog_Template();
			$this->template->content->template = $t->fulltree($catalog->catalog_category_id);
		}
		
		$this->template->content->catalog_category = ORM::factory('Catalog_Category')->find_all();
	}

	public function action_save()
	{
		$id = $this->request->param('id');
		$catalog = new Model_catalog($id);
		$a = array_merge(array('user_id'=>$this->user->pk()), $this->request->post());
		
		/**
		*	New Uploaded From TMP
		*/
		$uploaded = array();	
		$images = glob($_SERVER['DOCUMENT_ROOT'] . $this->tmp_image_path . $this->user->pk() .'_*');
		
		foreach($images as $image){
			if(rename($image , $_SERVER['DOCUMENT_ROOT'] . $catalog->image_path . basename($image))){
				$uploaded[] = basename($image);
				@unlink($image);
			}
		}
		
		if($catalog->loaded())
		{
			$images = $catalog->images();
			foreach($images as $image){
			
				if(is_file($_SERVER['DOCUMENT_ROOT'] . $catalog->image_path . $image))
				{
					$uploaded[] = $image;
				}
			}
			
			$a = array_merge($a, array('modify'=>time(), 'images' => serialize($uploaded)));	
		}else{
			
			$a = array_merge($a, array('create'=>time(), 'images' => serialize($uploaded)));
		}
		

		$catalog->values($a);
		$catalog->save();
		
		HTTP::redirect('/user/board/');
	}
	
	
	public function action_regions()
	{
		$this->auto_render = false;
		$regions = ORM::factory('Geo_Region')->order_by('district', 'ASC')->order_by('name', 'ASC')->find_all();
	
		header('Content-type: text/html; charset=windows-utf8;');
		echo '<table>
			<tr>';
		
		$i=0;
		foreach($regions as $region){
			echo '<td><a href="'.$region->id.'">'.$region->name.'</a></td>';
			$i++;

			echo $i%4 == 0 ? '</tr><tr>': '';
		}
			
		str_repeat('<td></td>', (4-$i%4));
		echo 	'</tr>
		</table>';
		die;
	}
	
	
	public function action_subregions()
	{
		$this->auto_render = false;
		$id = (int)$_GET['region'];
		$regions = ORM::factory('Geo_City')->order_by('name', 'ASC')->where('geo_region_id','=', $id)->find_all();
	
		header('Content-type: text/html; charset=windows-utf8;');
		echo '<table>
			<tr>';
		
		$i=0;
		foreach($regions as $region){
			echo '<td><a href="'.$region->id.'">'.$region->name.'</a></td>';
			$i++;

			echo $i%4 == 0 ? '</tr><tr>': '';
		}
			
		str_repeat('<td></td>', (4-$i%4));
		echo 	'</tr>
		</table>';
		die;
	}
	
	
	public function action_upload()
	{
		$this->auto_render = false;
		$catalog = new Model_catalog();
	
		$w = $h = 300;
	
		File::set_path($this->tmp_image_path);
		
		$newname = $this->user->pk() .'_'. File::get_random_filename(File::ext_by_mime($_FILES['image']['type']));
		
		$uploaded = File::upload_resize($_FILES['image'], $w, $h, $newname);
		
		if($uploaded) {
			$data = array('filename' => $this->tmp_image_path . $uploaded);
		} else {
			$data = array('error' => 'Failed to save');
		}
		header('Content-type: application/json');
		echo json_encode($data);
		die();
	}
	
	public function action_delete_image()
	{
		$this->auto_render = false;
		
		$path = $this->request->post("path");
		$id = $this->request->post("id");
		$catalog = new Model_Catalog($id);
		
		$images = glob($_SERVER['DOCUMENT_ROOT'] . $this->tmp_image_path . $this->user->pk() .'_*');
		foreach($images as $image){
			if(basename($path) == basename($image)) @unlink($image);
		}
		
		/**
		* If object exists remove his foto
		*/
		if($catalog->loaded()){
			$images = $catalog->images();
			$oimg = array();
			foreach($images as $image){
				if(basename($path) == $image){ 
					@unlink($_SERVER['DOCUMENT_ROOT'] . $catalog->image_path . $image);
				}else{
					$oimg[] = $image;
				}
			}
			
			$catalog->images = serialize($oimg);
			$catalog->save();
		}
		echo "ok";
		die();
	}
	
	
	public function action_delete()
	{
		$id = $this->request->param('id');
		$cat = new Model_Catalog($id);
		$cat->delete();
		HTTP::redirect('/user/board/');
	}
	
	public function action_publish()
	{
		$id = $this->request->param('id');
		$cat = new Model_Catalog($id);
		$cat->published = $cat->published == 1 ? 0 : 1;
		$cat->modify = time();
		$cat->save();
		
		HTTP::redirect('/user/board/');
	}
	
	
} 