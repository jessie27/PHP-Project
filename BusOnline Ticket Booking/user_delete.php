<!DOCTYPE>

<html>
   <head>
       <title>Bus Reservation</title>
	   
	   
	<link rel="stylesheet" href="styles/styles_delete.css" media="all"/>   
	   
	</head>
	
	<body>
	
	
	  <div class="main_wrapper">
	      
		  
		  <div class="header_wrapper">
		     
			<img id="logo" src="images/banner.gif"/>
			
		  
		  
		  </div>
		  
		  <div class="menubar">
		    <ul id="menu">
			   <li><a href="afterlogin.php">HOME</a></li>
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
$con = mysql_connect("localhost","root","","online");
if (!$con){
	die("can not connect : " . mysql_error());
}
mysql_select_db("online",$con);

require 'core.inc.php';	
$user_id = getuserfield('userid');
if (isset($_POST['update'])){
	$UpdateQuery = "UPDATE bus_info SET  username='$_POST[Username]', bname='$_POST[Busname]', 
	type='$_POST[Bustype]', fromd='$_POST[Leaving_From]', tod='$_POST[Going_To]', seat='$_POST[Seat_Quantity]',
	year='$_POST[Year]', month='$_POST[Month]', day='$_POST[Day]', time='$_POST[Time]'
	WHERE userid='$user_id' && username='$_POST[hidden]'";
	mysql_query($UpdateQuery, $con);	
};


if (isset($_POST['delete'])){
	$DeleteQuery = "DELETE FROM bus_info WHERE userid='$user_id' && username='$_POST[hidden]'";
	mysql_query($DeleteQuery, $con);	
};







$sql= "SELECT * FROM bus_info WHERE userid='$user_id'";
$myData = mysql_query($sql,$con);		
echo "<table align=left border=1>
<tr>
<th>Username</th>
<th>Busname</th>
<th>Bustype</th>
<th>Leaving From</th>
<th>Going to</th>
<th>Seat quantity</th>
<th>Year</th>
<th>Month</th>
<th>Day</th>
<th>Time</th>
</tr>";
while($record = mysql_fetch_array($myData)){
	echo "<form action=user_delete.php method=post>";
	echo "<tr>";
	echo "<td>" . "<input type=text name=Username value=" . $record['username'] . " </td>";
    echo "<td>" . "<input type=text name=Busname value=" . $record['bname'] . " </td>";
	echo "<td>" . "<input type=text name=Bustype value=" . $record['type'] . " </td>";
	echo "<td>" . "<input type=text name=Leaving_From value=" . $record['fromd'] . " </td>";
	echo "<td>" . "<input type=text name=Going_To value=" . $record['tod'] . " </td>";
	echo "<td>" . "<input type=text name=Seat_Quantity value=" . $record['seat'] . " </td>";
	echo "<td>" . "<input type=text name=Year value=" . $record['year'] . " </td>";
	echo "<td>" . "<input type=text name=Month value=" . $record['month'] . " </td>";
	echo "<td>" . "<input type=text name=Day value=" . $record['day'] . " </td>";
	echo "<td>" . "<input type=text name=Time value=" . $record['time'] . " </td>";
	echo "<td>" . "<input type=hidden name=hidden value=" . $record['username'] . " </td>";
	echo "<td>" . "<input type=submit name=update value=update" . " </td>";
	echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
	echo "</tr>";
	echo "</form>";	
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
	
	<p>&copy; Copyright 2015 Online ticket reservation | All Rights Reserved <br /></p>
</div>
		  
	    
	     </div>
		 
	</body>
</html>	