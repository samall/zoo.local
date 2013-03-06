<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_one = array(
		'info'=>array(
			'model'=>'User_Info',
			'foreign_key'=>'user_id'
		)
	);

	public function info()
	{
		//if(!$this->loaded()) return false;
		return $this->info;
	}


	public function labels()
	{
		return array(
			'username'	=> 'username',
			'email'		=> 'email',
			'password'	=> 'password',
			'password_confirm' => 'password_confirm',
			'captcha'	=> 'captcha'
		);
	}

}
