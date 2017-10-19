<head>
<link rel="stylesheet" href="styles/styles_contactt.css" media="all"/>   
</head>

<body>
<div class="main_wrapper">
	      
		  
		  <div class="header_wrapper">
		     
			<img id="logo" src="images/banner.gif"/>
			
		  
		  
		  </div>
		  
		  <div class="menubar">
		    <ul id="menu">
			<li><a href="index.php">HOME</a></li>
			   <li><a href="bus_schedule.php">BUS SCHEDULE</a></li>
			   <li><a href="service.php">OUR SERVICES</a></li>
			   <li><a href="gallery.php">GALLERY</a></li>
			   <li><a href="contact.php">CONTACT US</a></li>
    	</ul>
		
			   
			</div>
			
	         <div class="content_wrapper">
			 

<form action="regnew.php" method="POST">
<div align="center" style="vertical-align:bottom">
        <div align="center" style="vertical-align:bottom">
<table cellpadding='0'cellspacing='0' width="300px" height="400px"  border='1'>
<tr>
<td>Username   </td>
<td>  :  </td>
<td><input type="text" name="username" required="required" placeholder="username"></td>
</tr>
<td>Password   </td>
<td>  :  </td>
<td><input type="password" name="password" required="required" placeholder="password"></td>
</tr>
</tr>
<td>Password again </td>
<td>  :  </td>
<td><input type="password" name="password_again" required="required" placeholder="password"></td>
</tr>
</tr>
<td>Firstname</td>
<td>  :  </td>
<td><input type="text" name="firstname" required="required" placeholder="firstname"></td>
</tr>
</tr>
<td>Lastname</td>
<td>  :  </td>
<td> <input type="text" name="lastname" required="required" placeholder="lastname"></td>
</tr>
        
        <tr>
		<td>
            <td colspan="2"><input type="submit" value="Register"></td>
        </tr>
    </table>
	</div>
	</div>
</form>



</div>
  <div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">kollaynpur , Dhaka City, DHAKA  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 8:00 am - 12:00 am</p>
	
	<p>&copy; Copyright 2015 Online ticket reservation | All Rights Reserved <br /></p>
</div>
		  
	    
	     </div>
</body>
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
<?php
} else if (loggedin()){
    echo 'you\'re already registered and logged in.';  
}
?>