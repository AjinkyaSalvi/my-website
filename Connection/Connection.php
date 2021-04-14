<?php
     header('Content-Type: text/html; charset=ISO-8859-1');
     ini_set('default_charset', 'windows-1252');
     $db_username = 'root';
     $db_password = '*1rstKing';
     $db_name = 'asw';
     $db_host = 'localhost:3306';

     // Connect to MySQL
     $mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

     if ($mysqli->connect_error) {
     	die('Error: ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
     	echo "Error: Connection not established.";
     }

	error_reporting(0);
?>
