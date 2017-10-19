<!DOCTYPE>
<html>
   <head>
      
	   <link rel="stylesheet" href="styles/styles_loginn.css" media="all"/>   
	   
	</head>
	</html>

<?php
require 'checkcore.inc.php';
require 'connect.inc.php';

if (loggedin()) {
	include 'fetch.php';
} else {
	include 'checklogin.inc.php';
}

	



?>