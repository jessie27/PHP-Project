<!DOCTYPE>

<html>
   <head>
       <title>Bus Reservation</title>
	   
	   
	<link rel="stylesheet" href="styles/styles_fetch.css" media="all"/>   
	   
	</head>
	
	<body>
	
	
	  <div class="main_wrapper">
	      
		  
		  <div class="header_wrapper">
		     
			<img id="logo" src="images/banner.gif"/>
			
		  
		  
		  </div>
		  
		  <div class="menubar">
		    <ul id="menu">
			   <li><a href="fetch.php">HOME</a></li>
			   <li><a href="fetchbus_schedule.php">BUS SCHEDULE</a></li>
			   <li><a href="service.php">OUR SERVICES</a></li>
			   <li><a href="gallery.php">GALLERY</a></li>
			    <li><a href="user_delete.php">UPDATE</a></li>
			   <li><a href="contact.php">CONTACT US</a></li>
			   <li><a href="logout.php">LOG OUT</a></li>
			   
			</ul>
			<div >
			   
			</div>
		  
		  <div class="content_wrapper">
		  
		  
		    
		  
		    <div id="content_area">
			
			<?php
require 'core.inc.php';			
$con = mysql_connect("localhost","root","","online");
if (!$con){
	die("can not connect : " . mysql_error());
}
mysql_select_db("online",$con);
$user_id = getuserfield('userid');
$sql= "SELECT * FROM bus_info WHERE userid='$user_id'";
$myData = mysql_query($sql,$con);
echo "<table align=center width='1000px;' >
<tr>
<td><b>Userid</b></td>
<td><b>Username</b></td>
<td><b>Busname</b></td>
<td><b>Bustype</b></td>
<td><b>Leaving From</b></td>
<td><b>Going to</b></td>
<td><b>Seat quantity</b></td>
<td><b>Year</b></td>
<td><b>Month</b></td>
<td><b>Day</b></td>
<td><b>Time</b></td>
</tr>";
while($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['userid'] . "</td>";
	echo "<td>" . $record['username'] . "</td>";
	echo "<td>" . $record['bname'] . "</td>";
	echo "<td>" . $record['type'] . "</td>";
	echo "<td>" . $record['fromd'] . "</td>";
	echo "<td>" . $record['tod'] . "</td>";
	echo "<td>" . $record['seat'] . "</td>";
	echo "<td>" . $record['year'] . "</td>";
	echo "<td>" . $record['month'] . "</td>";
	echo "<td>" . $record['day'] . "</td>";
	echo "<td>" . $record['time'] . "</td>";
	echo "</tr>";	
}
echo "</table>";
mysql_close($con);
?>
			
			

			  
			
			  </div>
			
			</div>
		  </div>
		  <div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">kollaynpur , Dhaka City, DHAKA  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 8:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="Online Ticket Reservation" /></a>
	<p>&copy; Copyright 2015 Online ticket reservation | All Rights Reserved <br /></p>
</div>
		  
	    
	     </div>
		 
	</body>
</html>	

