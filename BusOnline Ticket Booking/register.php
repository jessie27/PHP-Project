<!DOCTYPE>
<html>
   <head>
      
	   <link rel="stylesheet" href="styles/styles_regg.css" media="all"/>   
	   
	</head>
	</html>

<?php
require 'core.inc.php';
require 'connect.inc.php';
if (!loggedin()){
	
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])) {
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$password_hash = md5($password);
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($lastname)){
		if($password!=$password_again){
			echo 'Passwords do not match.';
		} else {
			
			$query = "SELECT username FROM user WHERE username='$username'"; 
			$query_run = mysql_query($query);
			
			
			
			if (mysql_num_rows($query_run)==1) {
				echo 'The username '.$username.' already exists.';
			} else {
			  $query = "INSERT INTO user VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."')";
			  if ($query_run = mysql_query($query)) {
				  header('Location: register_success.php');
				  
			  } else {
				  echo 'Sorry, we couldn\'t register you at this time.Try again later';
			  }
			}
			
		}
	} else {
	echo 'All fields are required.';
    }
}
	
?>

<form action="register.php" method="POST">
Username:<br> <input type="text" name="username" required="required" placeholder="username"><br><br>
Password:<br> <input type="password" name="password" required="required" placeholder="password"><br><br>
Password again:<br> <input type="password" name="password_again" required="required" placeholder="password"><br><br>
Firstname:<br> <input type="text" name="firstname" required="required" placeholder="firstname"><br><br>
Lastname:<br> <input type="text" name="lastname" required="require" placeholder="lastname"><br><br>
<input type="submit" value="Register">
</form>


<?php
} else if (loggedin()){
    echo 'you\'re already registered and logged in.';  
}
?>