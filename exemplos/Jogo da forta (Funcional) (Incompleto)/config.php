<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "forca";
	$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$GLOBALS['conn'] = $conn;
	mysqli_query($GLOBALS['conn'], "SET NAMES 'utf8'");
	mysqli_query($GLOBALS['conn'], 'SET character_set_connection=utf8');
	mysqli_query($GLOBALS['conn'], 'SET character_set_client=utf8');
	mysqli_query($GLOBALS['conn'], 'SET character_set_results=utf8');


	function __autoload($class_name){
    	require_once 'libs/'. $class_name . '.class.php';
	}
 ?>