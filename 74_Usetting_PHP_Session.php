<?php

// To remove or clear information from session
// Application To log out 

// First set the session
// Then view the sessin in another page for conformation
// Then visit this page to clear the session
// and then again visit to see the session is clear or not

session_start();

unset($_SESSION['name']) ;

// To declare all session
// session_destroy()
?>