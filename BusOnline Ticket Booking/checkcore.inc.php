<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin(){
	if (isset($_SESSION['admin_id'])&&!empty($_SESSION['admin_id'])) {
		return true;
	} else {
		return false;
	}
	
}

function getuserfield($field) {
	$query = "SELECT $field FROM admin WHERE adminid='".$_SESSION['admin_id']."'";
    if($query_run = mysql_query($query)) {
		if ($query_result = mysql_result($query_run, 0, $field)) {
			return $query_result;
		}
	}
}
?>