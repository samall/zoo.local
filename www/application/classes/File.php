<?php defined('SYSPATH') OR die('No direct script access.');

class File extends Kohana_File {

	protected static $path;

	public static function upload_file(array $file, $newname, $type='image')
	{
		$cfg = Kohana::$config->load('allowed_ext');
		$allowed = $cfg->get($type);
		$ext = self::ext($file['name']);
	
		if(in_array($ext, $allowed))
		{
			if(move_uploaded_file($file['tmp_name'], self::$path . $newname.'.'.$ext))
			{
				return $newname.'.'.$ext;
			}
		}
		return false;
	}
	
	public static function upload_resize($file, $w, $h, $newname, $constraint = true)
	{
		$cfg = Kohana::$config->load('allowed_ext');
		$ext = self::ext($file['name']);
		$allowed = $cfg->get('image');
		
		if(!in_array($ext, $allowed))
		{
			return false;
		}
		
		$r = new Resize($file['tmp_name']);
		$r->resize($w, $h);
		$r->save(self::$path . $newname.'.'.$ext);
		return $newname.'.'.$ext;
	}
	
	
	public static function ext($name)
	{
		$p = explode('.', $name);
		return end($p);
	}
	
	
	public static function set_path($path)
	{
		$path = $_SERVER['DOCUMENT_ROOT'] .'/'. $path;
	
		if(!is_dir($path)) throw new Exception($path . " isn`t directory");
	
		self::$path = $path;
	}
	
	
	public static function get_random_filename($ext)
    {
        do {
            $name = uniqid();
            $file = self::$path . $name .'.'. $ext;
            usleep(1);
        } while (file_exists($file));
 
        return $name;
    }

}

?>