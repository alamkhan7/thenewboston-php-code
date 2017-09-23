<?php
// change type of the page
 header('Content-type: image/jpeg') ;

if (isset($_GET['source']))
{
	$source = $_GET['source'] ;

	// create new watermark image from existing image logo.jpg
	$watermark = imagecreatefrompng ('logo.png');
	$watermark_height = imagesy ($watermark) ;
	$watermark_width = imagesx ($watermark) ;

	$image = imagecreatetruecolor ($watermark_width, $watermark_height) ;
	$image = imagecreatefromjpeg ($source) ;
	$image_size = getimagesize ($source) ;
	// set postion for watermark 10px from bottom and also from right
	$x = $image_size[0] - $watermark_width - 10 ;
	$y = $image_size[1] - $watermark_height - 10 ;

	// Now merge logo on image
	// imagecopymerge(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h, opacity)
	imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 50) ;

	// put image on page and 2nd parameter save the resultant image
	imagejpeg($image) ;
	
}
else
	echo "Error 404 :(<br>";

?>

<?php
/*
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefromjpeg('photo.jpeg');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
*/
 ?>