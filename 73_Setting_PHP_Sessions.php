<?php
// Sessions: Store info about user which currently visiting the site
// stored on server hidden from user and unable to change it
// or store user login info 

// First of all set the sessions before to deal with session data
session_start();

// Create session for in this page e.g $_SESSION['name']
// and store some info on that e.g Alam
// this session will be now access on other pages

$_SESSION['name'] = 'Alam' ;

// Now return this info to another page (73_session_view.php)

// Now to clear the session (information) see page 74_Usetting_PHP_Session.php
?>