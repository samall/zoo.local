<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cp_Settings extends Controller_Admin {

	public function action_index()
	{
		$config = Kohana::$config->load('site');
	
		$this->template->title = "Настройки";
		$this->template->content = new View('settings/index');
		$this->template->content->config = $config;
	}
	
	public function action_save()
	{
		//backup prev config
		$path = APPPATH . 'config/';
		copy($path.'site.php', $path.'/bkp/site_'.time().'.php');
	
		$c = Kohana::$config->load('site');
		$keys = array_keys($c->as_array());
		
		$set = "<?php defined('SYSPATH') or die('No direct access allowed.');\n\n";
		$set .= "return array(\n";
		foreach($keys as $key)
		{
			$val = $this->request->post($key);
			$set .= "'".$key ."' => '".$val."',\n";
		}

		$set .= ");";
		
		$fp = fopen(APPPATH . 'config/site.php', 'w');
		fwrite($fp, $set);
		fclose($fp);
		
		HTTP::redirect("/cp/settings/");
	}
	
	
}
