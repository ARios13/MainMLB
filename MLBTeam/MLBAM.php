<?php
$link = mysql_connect ( 'localhost', 'root', '' );
if (! $link) {
	die ( 'Could not connect: ' . mysql_error () );
}

// Select the data base
$db = mysql_select_db ( 'oss', $link );
if (! $db) {
	die ( 'Error selecting database \'oss\' : ' . mysql_error () );
}

// Fetch the data
$query = "
  SELECT teamID, B_AVG
  FROM teamstats
  ORDER BY B_AVG ASC";
$result = mysql_query ( $query );

// All good?
if (! $result) {
	// Nope
	$message = 'Invalid query: ' . mysql_error () . "\n";
	$message .= 'Whole query: ' . $query;
	die ( $message );
}

// Print out rows
echo "[\n";
while ( $row = mysql_fetch_assoc ( $result ) ) {
	echo " {\n";
	echo '  "teamID": "' . $row ['teamID'] . '",' . "\n";
	echo '  "B_AVG": ' . $row ['B_AVG'] . ',' . "\n";
	echo " },";
	print "\n";
}
echo "\n]";
// Close the connection
mysql_close ( $link );
?>