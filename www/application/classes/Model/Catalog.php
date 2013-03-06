<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Catalog extends ORM {

	public $image_path = '/assets/catalog/';
	
	
	public function images()
	{
		if(empty($this->images)) return array(); 
		return unserialize($this->images);
	}
	
	
	public function delete()
	{
		$this->delete_images($this->images());
		parent::delete();
	}
	
	public function delete_images($images)
	{
		$r = false;
		foreach($images as $img)
		{
			$r = @unlink($_SERVER['DOCUMENT_ROOT'] . $this->image_path . $img);
		}
		
		return $r;
	}
	
	
	public function upload($name)
	{
		File::set_path($this->image_path);
		$uploaded = array();
		
		for($i=0; $i< count($_FILES[$name]); $i++)
		{
			$file = array(
				'tmp_name' => $_FILES[$name]['tmp_name'][$i],
				'name' => $_FILES[$name]['name'][$i],
				'type' => $_FILES[$name]['type'][$i]
			);
		
			$newname = File::get_random_filename(File::ext_by_mime($file['type']));
			$uploaded[] = File::upload_file($file, $newname, 'image');
		}
		return $uploaded;
	}

	
	public function get_premium($limit, $offset)
	{
		return $this->where('status','=','2')->limit($limit)->offset($offset)->find_all();
	}
	
}
