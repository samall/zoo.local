<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Catalog extends ORM {

	public $image_path = '/assets/catalog/';
	
	
	public function images()
	{
		if(empty($this->images)) return array(); 
		return unserialize($this->images);
	}
	
	
	public function get_values()
	{
		$cat = new Model_Catalog_Category($this->catalog_category_id);
		$ret = array();
		$query = "SELECT * FROM `".$cat->name()."` WHERE `catalog_id`='".$this->pk()."'";
		$result = DB::query(Database::SELECT, $query)->execute()->current();
		
		if(!$result) return array();
		
		foreach($result as $k=>$v)
		{
			$k = str_replace('param_', '', $k);
			$ret[$k] = $v;
		}
		
		return $ret;
	}
	
	public function set_values(array $values)
	{
		$cat = new Model_Catalog_Category($this->catalog_category_id);
		
		$query = "REPLACE INTO `".$cat->name()."` SET catalog_id='".$this->pk()."', ";
		
		foreach($values as $key=>$val)
		{
			$qp[] = "`".$key."`='".$val."'";
		}
		$query .= implode(", ", $qp);
		$query .=";";
		return DB::query(Database::INSERT, $query)->execute();
	}
	
	public function delete_values()
	{
		$cat = new Model_Catalog_Category($this->catalog_category_id);
		return DB::query(Database::DELETE, "DELETE FROM `".$cat->name()."` WHERE catalog_id='".$this->pk()."'");
	}
	
	public function delete()
	{
		$this->delete_images($this->images());
		$this->delete_values();
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
