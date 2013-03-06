<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View {

	public function set_filename($file)
	{

		if ($path = Kohana::find_file('views/'. Theme::$name, $file))
		{
			$this->_file = $path;
		}
		else
		{
			parent::set_filename($file);
		}

		return $this;
	}

}
