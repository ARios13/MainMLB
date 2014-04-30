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
exit ();
?>
<html>
<body>
<p>Thank you For visiting :)<br/></p>
<p>If you wish return, Please <a href="index.php">Login</a></p>
</body>
</html>