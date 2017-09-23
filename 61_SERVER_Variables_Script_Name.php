<?php
// Pre define variable in PHP

// variable $_SERVER[]
// Pre define set of enviromental Information that's 
// allow you to access info about page , user , request
// e.g Looking file name (Display current file name)

$script_Name = $_SERVER['SCRIPT_NAME'] ;
echo $script_Name."<br>";
?>