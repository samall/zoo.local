<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Catalog_Category extends ORM {

	
	public function create_table()
	{
		if(!$this->loaded() || empty($this->alias)) return false;
		
		$t = new Model_Catalog_Template();
		$template = $t->fulltree($this->pk());
		
		if(!count($template)) return false;
		
		$name = $this->name();
		
		$query = "CREATE TABLE IF NOT EXISTS `".$name."` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`catalog_id` int(11) NOT NULL,
		";
		
		foreach($template as $row)
		{
			if($row->lvl == 3){
				$query .= "`param_".$row->id."` varchar(255), \n";
			}
		}
	
		$query .=" PRIMARY KEY(`catalog_id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8";
		
		return DB::query(Database::INSERT, $query)->execute();
	}
	
	public function name()
	{
		return '_cat_'.preg_replace("[-,\. ]", "_", $this->alias);
	}
	
	public function table_exists($name = NULL)
	{
		$list = Database::instance()->list_tables('_cat_%');
		$res = false;
		
		if($name == NULL) $name = $this->name();
		
		foreach($list as $r)
		{
			if($name == $r){
				$res = true;
				break;
			}
		}
		
		return $res;
	}
	
	public function update_table()
	{
		if(!$this->loaded() || empty($this->alias)) return false;
	
		$tbl = $this->name();
		// список существующих колонок
		$col = Database::instance()->list_columns($tbl);
		array_shift($col);
		array_shift($col);
		$columns = array_keys($col);
		
		// список параметров на добавление 
		$t = new Model_Catalog_Template();
		$template = $t->fulltree($this->pk());
		
		if(!count($template)) return false;
		$newcol = array();
		foreach($template as $row)
		{
			if($row->lvl == 3){
				$newcol[] = 'param_'.$row->id;
			}
		}

		// находим новые колонки
		$diff = array_diff($newcol, $columns);
		
		foreach($diff as $col)
		{
			if(in_array($col, $newcol)){
				$this->add_column($tbl, $col);
			}
		}
		
		$diff = array_diff($columns, $newcol);
		foreach($diff as $col)
		{
			if(in_array($col, $columns)){
				$this->remove_column($tbl, $col);
			}
		}
	}
	
	
	public function add_column($tbl, $col)
	{
		$query = "ALTER TABLE `".$tbl."` ADD `".$col."` varchar(255);";
		return DB::query(Database::INSERT, $query)->execute();
	}
	
	public function remove_column($tbl, $col)
	{
		$query = "ALTER TABLE `".$tbl."` DROP `".$col."`;";
		return DB::query(Database::INSERT, $query)->execute();
	}
	
}
