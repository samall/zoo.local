<?php

class Resize {

   protected $image;
   protected $image_type;

   public function __construct($filename = '')
   {
		$this->load($filename);
   }
   
   
	public function load($filename)
	{
		$image_info = getimagesize($filename);
		$this->image_type = $image_info[2];
      
		switch($this->image_type){
	  
		case IMAGETYPE_JPEG: 
			$this->image = imagecreatefromjpeg($filename);
		break;
		case IMAGETYPE_GIF:
			$this->image = imagecreatefromgif($filename);
		break;
		case IMAGETYPE_PNG:
			$this->image = imagecreatefrompng($filename);
			imageAlphaBlending($this->image,true);
			imageSaveAlpha($this->image,true); 
		}
   }
   
   public function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) 
   {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {

         imagegif($this->image,$filename);
      } elseif( $image_type == IMAGETYPE_PNG ) {

         imagepng($this->image,$filename);
      }
      if( $permissions != null) {

         chmod($filename,$permissions);
      }
	
   }
   
   public function output($image_type=IMAGETYPE_JPEG)
   {
		if( $image_type == IMAGETYPE_JPEG ) {
			imagejpeg($this->image);
		}elseif($image_type == IMAGETYPE_GIF ) {
			imagegif($this->image);
		}elseif($image_type == IMAGETYPE_PNG ) {
			imagepng($this->image);
		}
   }
   
   public function getWidth()
   {
      return imagesx($this->image);
   }
   
   public function getHeight() 
   {

      return imagesy($this->image);
   }
   
   public function resizeToHeight($height) 
   {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }

   public function resizeToWidth($width)
   {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }

   function scale($scale) 
   {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100;
      $this->resize($width,$height);
   }

	function resize($new_width, $new_height, $zoom_crop = 0)
	{
		$width = imagesx($this->image);
		$height = imagesy($this->image);
	
		// don't allow new width or height to be greater than the original
		if( $new_width > $width ) $new_width = $width;
		if( $new_height > $height ) $new_height = $height;
		
		// generate new w/h if not provided
		if( $new_width && !$new_height ) {
			$new_height = $height * ( $new_width / $width );
		} elseif($new_height && !$new_width) {
			$new_width = $width * ( $new_height / $height );
		} elseif(!$new_width && !$new_height) {
			$new_width = $width;
			$new_height = $height;
		}
	
		// create a new true color image
		$canvas = imagecreatetruecolor( $new_width, $new_height );	
	
		if( $zoom_crop ) {

			$src_x = $src_y = 0;
			$src_w = $width;
			$src_h = $height;

			$cmp_x = $width  / $new_width;
			$cmp_y = $height / $new_height;

			// calculate x or y coordinate and width or height of source

			if ( $cmp_x > $cmp_y ) {

				$src_w = round( ( $width / $cmp_x * $cmp_y ) );
				$src_x = round( ( $width - ( $width / $cmp_x * $cmp_y ) ) / 2 );

			} elseif ( $cmp_y > $cmp_x ) {

				$src_h = round( ( $height / $cmp_y * $cmp_x ) );
				$src_y = round( ( $height - ( $height / $cmp_y * $cmp_x ) ) / 2 );

			}
		
				imagecopyresampled( $canvas, $this->image, 0, 0, $src_x, $src_y, $new_width, $new_height, $src_w, $src_h );

			} else {

			// copy and resize part of an image with resampling
			imagecopyresampled( $canvas, $this->image, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		}
		
		$this->image = $canvas;
   }      

}
?>