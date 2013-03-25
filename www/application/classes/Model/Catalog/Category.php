<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Catalog_Category extends ORM {

	
	public function create_table()
	{
		if(!$this->loaded() || empty($this->alias)) return false;
		
		$t = new Model_Catalog_Template();
		$template = $t->fulltree($this->pk());
		
		if(!count($template)) return false;
		
		$name = preg_replace("[-,\. ]", "_", $this->alias);
		
		$query = "CREATE TABLE IF NOT EXISTS `_cat_".$name."` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`catalog_id` int(11) NOT NULL,
		";
		
		foreach($template as $row)
		{
			if($row->lvl == 3){
				$query .= "`param_".$row->id."` varchar(255), \n";
			}
		}
	
		$query .=" PRIMARY KEY(`id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8";
		
		return DB::query(Database::INSERT, $query)->execute();
	}
	
	public function tables_exists()
	{
		return Database::instance()->list_tables('_cat_%');
	}
	
	
	public function add_column()
	{
	
	}
	
	public function remove_column()
	{
	
	}
	
}
