<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
   <head>
       <title>Bus Reservation</title>
	   
	   
	<link rel="stylesheet" href="styles/busschedule_styles.css" media="all"/>   
	   
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
			   <li><a href="delete.php">UPDATE</a></li>
			   <li><a href="contact.php">CONTACT US</a></li>
			   <li><a href="logout.php">LOG OUT</a></li>
			   
			</ul>
			<div >
			   
			</div>
		  
		  <div class="content_wrapper">
		  
		  
		    
		  
		    <div id="content_area">
			
			  <?php
$con = mysql_connect("localhost","root","","online");
if (!$con){
	die("can not connect : " . mysql_error());
}
mysql_select_db("online",$con);
$sql= "SELECT * FROM departure_info";
$myData = mysql_query($sql,$con);
echo "<table align=center width='800px;' border=1>
<tr>
<td><b>Leaving_From:<b></td>
<td><b>Going_To:</b></td>
<td><b>Time:</b></td>
<td><b>Fare:</b></td>
</tr>";
while($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['from'] . "</td>";
	echo "<td>" . $record['to'] . "</td>";
	echo "<td>" . $record['time'] . "</td>";
	echo "<td>" . $record['Fare'] . "</td>";
	echo "</tr>";	
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
			  
			
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


