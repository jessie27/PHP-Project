<!DOCTYPE>
<html>
   <head>
      
	   <link rel="stylesheet" href="styles/styles_loginn.css" media="all"/>   
	   
	</head>
	</html>

<?php
require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
	include 'afterlogin.php';
} else {
	include 'login.inc.php';
}

	



?>