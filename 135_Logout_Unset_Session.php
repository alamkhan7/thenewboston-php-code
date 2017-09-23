<?php
// THis page to log out or clear the session

// For going back to that page
include '135_Return_Current_Page.inc.php' ;

unset($_SESSION['user_id']) ;

header('Location: '.$http_referer);
?>
