<?php
include_once 'functions.php';
sec_session_start ();

// Unset all session values
$_SESSION = array ();

// get session parameters
$params = session_get_cookie_params ();

// Delete the actual cookie.
setcookie ( session_name (), '', time () - 42000, $params ["path"], $params ["domain"], $params ["secure"], $params ["httponly"] );

// Destroy session
session_destroy ();
print "Thank you For visiting :)<br/>";
print "If you wish return, Please";
echo "<a href=index.php> Login</a>";
header ( "index.php" );
exit ();
?>