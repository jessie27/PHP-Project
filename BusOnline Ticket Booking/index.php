<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
   <head>
       <title>Bus Reservation</title>
	   
	   
	<link rel="stylesheet" href="styles/styless.css" media="all"/>   
	   
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
			   
			   
			  
			   <li><a href="regnew.php">SIGN UP</a></li>
			   <li><a href="contact.php">CONTACT US</a></li>
			   
			   
			</ul>
			<div >
			   
			</div>
		  
		  <div class="content_wrapper">
		  
		  
		  
		    
		    <div id="content_area">
			<div id="sidebar">
			<div class="portfolio-area" style="margin:0 auto; padding:40px 20px 20px 20px; width:450px;">	
				<div id="contactleft">
<b><font=30px>WELCOME TO BUS RESERVATION SYSTEM!</font></b><br><br>				
Let users book tickets for various routes and destinations using a bus ticketing system.

Bus Reservation System is an online bus scheduling software designed to automate the ticket purchasing through an easy online booking system. The script helps you embed an online bus reservation system on your website and further manage reservations, clients data and availability. You can schedule routes, set availability, upload an interactive seat map and let bookers select their seats.

				</div>
				</div>
			</div>
		  
			
			  <div id="login_box">
			  
			  
			 <form action="checkloginsource.php" method="POST">
    
	    <div align="center" style="vertical-align:bottom">
        <div align="center" style="vertical-align:bottom">
 <table cellpadding='0'cellspacing='0' border='1'>
 
 <tr align="center">
 <td colspan="4"><b>Admin Login</b></td>
 </tr>
<tr>
<td>Admin name   </td>
<td>  :  </td>
<td><input type="text" name="admin_name" placeholder="name" ></td>
</tr>
<td>Password  </td>
<td>  :  </td>
<td><input type="password" name="password" placeholder="password" ></td>
</tr>
        
        <tr>
		<td>
            <td colspan="2"><input type="submit" value=  "Log In"></td>
        </tr>
    </table>
    </div>
</form>
<br>
</br>
<br>
</br>


			  
			  <form action="loginsource.php" method="POST">
    
	    <div align="center" style="vertical-align:bottom">
        <div align="center" style="vertical-align:bottom">
 <table cellpadding='0'cellspacing='0' border='1'>
  <tr align="center">
 <td colspan="4"><b>User Login</b></td>
 </tr>
<tr>
<td>Username   </td>
<td>  :  </td>
<td><input type="text" name="username" placeholder="username" ></td>
</tr>
<td>Password   </td>
<td>  :  </td>
<td><input type="password" name="password" placeholder="password" ></td>
</tr>
        
        <tr>
		<td>
            <td colspan="2"><input type="submit" value=  "Log In"></td>
        </tr>
    </table>
    </div>
</form>
			  
			  
			  </div>
			  
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
