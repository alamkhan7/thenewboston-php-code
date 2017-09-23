<?php
// Delete Cookie before time expiry
// Reset the cookie agian
// and change + to -
setcookie('username' , 'Alam' , time() - 1000 ) ;

// Why we need e.g To log out from page 

?>

