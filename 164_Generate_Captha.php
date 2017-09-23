<?php
session_start() ;
header('Content-type: image/jpeg') ;

// get random code which is generate
$text = $_SESSION['secure'] ;

// Depend on which type of font your are using
$font_size =  30 ;
$image_width = 130 ;
$image_height = 80 ;

// create image
$image = imagecreate($image_width, $image_height) ;
imagecolorallocate($image, 255, 255, 255) ; // set background white
$text_color = imagecolorallocate($image, 0, 0, 0) ; // Text color black

// Make some noise on image
//imageline(image, x1, y1, x2, y2, color)
// x1 y1 x2 y2 is coordinate
for ($x=1; $x < 30; $x++) {
	$x1 = rand(1,100) ;
	$x2 = rand(1,100) ;
	$y1 = rand(1,100) ;
	$y2 = rand(1,100) ;
	imageline($image, $x1, $y1, $x2, $y2, $text_color) ;
}


// To ensure that captcha image output properly
// imagettftext(image, size, angle, x, y, color, fontfile, text)
imagettftext($image, $font_size, 0, 15, 60, $text_color, 'font.ttf', $text) ;

// output image
imagejpeg($image);

?>