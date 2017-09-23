<?php
// Take five parameters but the last one is optional
// to -> the email address which you want to sent the email
// subject-> Email subject
// message -> email body or message
// header -> using from or reference
// mail(to, subject, message)

$to = 'moskan9595@gmail.com' ;
$subject = 'Email Title' ;
$body = "This is email..." ;
$header = "From: UET <uetpeshawar@uet.pk>" ;

if ( mail($to, $subject, $body , $header) )
	echo "Email done<br>" ;
else
	echo "Email Failed<br>" ;

?>