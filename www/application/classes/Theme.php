<?php defined('SYSPATH') or die('No direct script access.');

class Theme 
{
	public static $name;
	
	public static function set_theme($name)
	{
		Theme::$name = $name;
	}
	
}