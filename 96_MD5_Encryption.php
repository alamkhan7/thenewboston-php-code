<?php
// MD5 is the form of encryption and hash is generated from input string
// It's mean change plain text to encypted text
// for every unique string generate unique string
// This string is one way encryption can't be decrypted the hash to get original string
// used for password matching in database
// Not secure to broutforce attack

$str= 'password' ;

$str_hash = md5($str) ;

echo $str_hash . "<br>";

?>