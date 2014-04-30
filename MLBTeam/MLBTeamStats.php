<html>
<link rel="stylesheet" href="MLBTeam.css" TYPE="text/css">
<?php
$con = mysql_connect ( 'localhost', 'root', '' );
if (! $con) {
	die ( 'Could not connect: ' . mysql_error () );
}

$db = mysql_select_db ( 'oss', $con );
if (! $db) {
	die ( 'Error selecting database \'oss\' : ' . mysql_error () );
}
$query = "
SELECT *
FROM teams, teamstats
WHERE teams.teamID = '23'
AND teamstats.teamID = '23' ";
$result = mysql_query ( $query );
$values = mysql_fetch_array ( $result );

if (! $result) {
	$message = 'Invalid query: ' . mysql_error () . "\n";
	$message .= 'Whole query: ' . $query;
	die ( $message );
}

echo '<pre>';
print_r ( $values );

/*
 * print "<table>"; while ( $row = mysql_fetch_assoc ( $result ) ) { echo '<tr>'; echo ("<td>TeamID</td><td>Team</td><td>Wins</td><td>Losses</td><td>HomeRec</td><td>RoadRec</td> <td>RS</td><td>RA</td><td>B_AVG</td><td>Hits</td> <td>ERA</td><td>SO</td><td>OBP</td><td>SLG</td></tr>"); foreach ( $row as $field ) { echo '<td>' . htmlspecialchars ( $field ) . '</td>'; } echo '</tr>'; } print "</table>";
 */
mysql_close ( $con );
?>
</html>