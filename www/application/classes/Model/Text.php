<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Text extends ORM {

	protected $_has_one = array(
		'structure'=>array(
			'model'=>'Structure',
			'foreign_key'=>'id'
		)
	);
	
	
	protected $_primary_key = 'structure_id';


}
