<?php
// first of all you need to open 73_Setting_PHP_Sessions.php page to create session

session_start() ;
// we do not need to include the page because sassion data is stored on server
echo $_SESSION['name'] ;

?>