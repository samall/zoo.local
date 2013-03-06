<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User_Info extends ORM {

	protected $_primary_key = 'user_id';
	protected $_belongs_to = array(
		'user'=>array(
			
		)
	);

}
