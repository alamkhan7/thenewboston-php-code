<?php

// Cookies is like piece of data or file that store specific info and it's unique for every visitor of the page
// Cookies is stored in visitor computer and can be used for latter access

/* Useful for storing info for long time in on user computer and session is temporary store if browser closed then data is removed from session
It's stored on user computer so it's danger but use some kind of encryption to secure it */

// first set cookies
// setcookie(name of the cookies , value , expiration date of cookie(Note:take value in second) ) ;

$time = time() ; // Get current time
// Then add 1000 second with that so it's mean cookie will be expired after 10 second
setcookie('username' , 'Alam' , time() + 1000 ) ;
?>