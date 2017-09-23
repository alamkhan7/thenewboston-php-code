<?php
// Using header function to modify header to a browser when you sent
// Reason: Enable Disable catches , change document type
// header() can't be used after output has been sent to a page

$redirect_page = 'http://google.com' ;
$redirect = true ;
if ($redirect == true)
	header('Location: ' . $redirect_page) ;

?>