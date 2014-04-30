<?php
function getRadios($arr) {
	$str = "";
	$count = 1;
	foreach ( $arr as $entry ) {
		$str .= "<input type='radio' name='team' value='$count'>$entry<br/>";
		$count ++;
	}
	return $str;
}
function getRadiosAssociative($arr) {
	$str = "";
	$count = 1;
	foreach ( $arr as $key => $value ) {
		$str .= "<input type='radio' name='team' value='" . $value ['teamID'] . "'>" . $value ['teamName'] . "<br/>\n";
		$count ++;
	}
	return $str;
}
class tablePrint {
	public $xArr = array ();
	public $HTML = '';
	function __construct($xArr) {
		$this->xArr = $xArr;
	}
	function printTable() {
		$this->HTML .= "<table>";
		foreach ( $this->xArr as $key => $value ) {
			$this->HTML .= "<tr><th>$key</th>
			<td>$value</td>
			</tr>";
		}
		$this->HTML .= "</table>";
		return $this->HTML;
	}
}

?>