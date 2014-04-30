<?php
$database = new mysqli ( "localhost", "root", "", "oss" );

if ($database->connect_errno) {
	echo "Failed to connect MySQL: " . mysqli_connect_errno ();
}
?>