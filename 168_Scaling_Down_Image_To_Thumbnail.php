<?php
// Read image in browser and scale down to a specfic thumbnail size(Resizing)
header('Content-type: image/jpeg') ;

if(isset($_GET['image']))
{
	if (!empty($_GET['image']))
	{
		$image = $_GET['image'] ;

		// get image size
		// getimagesize(filename) return array image dimension index 0 is width in index 1 is height
		$image_size = getimagesize($image) ;
		$image_width = $image_size[0] ;
		$image_height = $image_size[1] ;

		// Now specify new image size keep aspect ration
		$new_size = ($image_width+$image_height) / ($image_width * ($image_height/45) ) ;
		$new_height = $image_height * $new_size ;
		$new_width = $image_width * $new_size ;

		// Create new color image
		$new_image = imagecreatetruecolor($new_width, $new_height) ;
		$old_image = imagecreatefromjpeg($image) ;

		// resize the image
		// imagecopyresized(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
		imagecopyresized($new_image, $old_image, 0 , 0 , 0 , 0 , $new_width, $new_height, $image_width, $image_height) ;

		//Display image
		imagejpeg($new_image) ;
	}
	else
		echo "Please submit the image.<br>";
}


?>