<?php
require_once ("MLBLib.php");
require_once ("MLBConfig.php");
require_once ("MLBDBConfig.php");
require_once ("MLBHeader.php");

if (isset ( $_POST ['team'] )) {
	if ($debug) {
		print "<pre>";
		print_r ( $_POST );
		print "</pre>";
	}
	
	$teamID = $_POST ['team'];
	
	$r = $database->query ( "SELECT * FROM teamStats WHERE teamID = $teamID" );
	$rResults = array ();
	$count = 0;
	while ( $entry = mysqli_fetch_assoc ( $r ) ) {
		$rResults [] = $entry;
	}
	
	if ($debug) {
		print "<pre>";
		print_r ( $rResults [0] );
		print "</pre>";
	}
	
	$HHTML = new tablePrint ( $rResults [0] );
	print $HHTML->printTable ();
	
	if (isset ( $rResults [0] ['teamID'] )) {
		$id = $rResults [0] ['teamID'];
		print "<img src='img/$id.png' style='width: 75px; height: 75px;'>";
	}
	print "<br/><a href='/H.W.2/MLBTeam/MLBMain.php'>Click Here For A New Team</a>";
} 

else {
	
	$r = $database->query ( "SELECT teamID, teamName FROM teams ORDER BY teamName" );
	$rResults = array ();
	$count = 0;
	while ( $entry = mysqli_fetch_array ( $r ) ) {
		$rResults [$count + 1] = array (
				"teamID" => $entry ['teamID'],
				"teamName" => $entry ['teamName'] 
		);
		$count ++;
	}
	
	if ($debug) {
		print "<pre>";
		print_r ( $rResults );
		print "</pre>";
	}
	
	print "<form action='MLBMain.php' method='POST'>";
	print getRadiosAssociative ( $rResults );
	print "<input type='submit' value='Submit'></form>";
}

require_once ("MLBFooter.php");

?>