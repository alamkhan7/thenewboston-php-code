<?php
// Convert text to graphics
// first change the header info of the page 
// change content type of the page to image.jpeg so when browser visit this page then browser will interpret this page is image

header('content-type: image/jpeg') ;

if(isset($_GET['email']))
{
	if (!empty($_GET['email']))
	{
		$email = $_GET['email'];

		
	}
	else
		echo "Pleasa Fill Field.<br>";
}
else
{
	$email = 'No Email Specified.';
}

 
 		$email_lenght = strlen($email) ;

		// Now for Font size for example@example.com
		$font_size = 6 ;

		// image width and height
		$imgae_height = ImageFontHeight($font_size) ;
		$image_width = ImageFontWidth($font_size) * $email_lenght ;

		//Now create instance of the image
		$image = imagecreate($image_width, $imgae_height) ;
		
		// color for image
		//imagecolorallocate(image, red, green, blue)
		imagecolorallocate($image, 255, 255, 255); // white background

		// Now for Text color
		$font_color = imagecolorallocate($image, 0, 0, 0) ;

		// Create image from string
		imagestring($image, $font_color, 0, 0, $email, $font_color) ;

		// output image
		imagejpeg($image) ;
?>
