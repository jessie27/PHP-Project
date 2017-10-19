<!DOCTYPE>
<?php
include("db.php");
?>
<html>
   <head>
       <title>Bus Reservation</title>
	   
	   
	<link rel="stylesheet" href="styles/styles_afterloginnn.css" media="all"/>   
	   
	</head>
	
	<body bgcolor="lightgrey">






	
	
	  <div class="main_wrapper">
	      
		  
		  <div class="header_wrapper">
		     
			<img id="logo" src="images/banner.gif"/>
			
		  
		  
		  </div>
		  
		  <div class="menubar">
		    <ul id="menu">
			   <li><a href="afterlogin.php">HOME</a></li>
			   <li><a href="bus_schedule.php">BUS SCHEDULE</a></li>
			   <li><a href="service.php">OUR SERVICES</a></li>
			   
			   <li><a href="delete.php">UPDATE</a></li>
			   <li><a href="gallery.php">GALLERY</a></li>
			   <li><a href="contact.php">CONTACT US</a></li>
			   <li><a href="logout.php">LOG OUT</a></li>
			   
			   
			</ul>
			<div >
			   
			</div>
		  
		  <div class="content_wrapper">
		  
		  
		    
		  
		    <div id="content_area" >
			<div id="sidebar" >
			<form action="afterlogin.php" method="post" enctype="multipart/form-data">
   <table align="center"  width="650" height="550" border="2" bgcolor="wheat">
   
      <tr align="center">
	  <td colspan="7"><b>Insert Your Information Here<b></td>
	  </tr>
	  
      <tr>
	    <td align="right"><b>Bus name:</b></td>
		<td>
		<select name="bname" required>
		<option>Select a Bus</option>
		<?php
		$get_name = "select * from bus_name";
	$run_name = mysqli_query($con, $get_name);
	
	while ($row_name=mysqli_fetch_array($run_name)){
		
		$busname_id = $row_name['busname_id'];
		$bus_name = $row_name['bus_name'];
		
	echo "<option >$bus_name</option>";	
	}
	?>
	</select>
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Type:</b></td>
		<td>
		<select name="type" required>
		<option>Select type</option>
		<?php
	$get_type = "select * from bus_type";
	$run_type = mysqli_query($con, $get_type);
	
	while ($row_type=mysqli_fetch_array($run_type)){
		
		$bustype_id = $row_type['bustype_id'];
		$type_name = $row_type['type_name'];
		
	echo "<option >$type_name</option>";	
	}
		
		?>
		</select>
		
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Date:<b></td>
		<td>
		<select name="year" >
  <option value="">Year</option>
  <?php for ($year = date('Y'); $year < date('Y')+10; $year++) { ?>
	<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
	<?php } ?>
</select>
<select name="month">
	<option value="">Month</option>
	<?php for ($month = 1; $month <= 12; $month++) { ?>
	<option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
	<?php } ?>
</select>
<select name="day">
  <option value="">Day</option>
	<?php for ($day = 1; $day <= 31; $day++) { ?>
	<option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>"><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
	<?php } ?>
</select>
		</td>

	  </tr>
	   
	   <tr>
	    <td align="right"><b>Time:</b></td>
		<td>
		<?php 
    $start = strtotime('12:00 AM');
    $end   = strtotime('11:59 PM');
?>
<select style="width:85px;" name="time" id="select1">
    <?php for($i = $start;$i<=$end;$i+=3600){ ?>  
        <option value='<?php echo date('G:i', $i); ?>'><?php echo date('G:i', $i); ?></option>;
    <?php } ?>
</select>
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Leaving From:</b></td>
		<td>
		<select name="fromd" required >
		<option>Select A Place</option>
		<?php
	$get_fromm = "select * from fromdis";
	$run_fromm = mysqli_query($con, $get_fromm);
	
	while ($row_fromm=mysqli_fetch_array($run_fromm)){
		
		$from_id = $row_fromm['from_id'];
		$from_dis = $row_fromm['from_dis'];
		
	echo "<option >$from_dis</option>";	
	}
		
	?>
		</select>
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Going To:</b></td>
		<td>
		<select name="tod" required>
		<option>Select A Place</option>
		<?php
	$get_too = "select * from to_place";
	$run_too = mysqli_query($con, $get_too);
	
	while ($row_too=mysqli_fetch_array($run_too)){
		
		$to_id = $row_too['to_id'];
		$to_dis = $row_too['to_dis'];
		
	echo "<option >$to_dis</option>";	
	}
	?>
	</select>
	  
		</td>
	  </tr>
	  
	  
	  
	  
	  <tr>
	    <td align="right"><b>Seat quantity:</b></td>
		<td>
		<select name="seat" required>
		<option>Select required seats</option>
		<?php
	$get_seat = "select * from seat";
	$run_seat = mysqli_query($con, $get_seat);
	
	while ($row_seat=mysqli_fetch_array($run_seat)){
		
		$seat_id = $row_seat['seat_id'];
		$seat_no = $row_seat['seat_no'];
		
	echo "<option >$seat_no</option>";	
	}
	?>
	</select>
	  
		</td>
	  </tr>
	  
	  
	  
	  
	  <tr align="right">
	    
		<td align="center" colspan="8"><input type="submit" name="insert_post" value="insert now" /></td>
	  </tr>
	   
	   
    </table>	

			</div>
			</div>
		  </div>
		  </div>
		    <div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">kollaynpur , Dhaka City, DHAKA  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 8:00 am - 12:00 am</p>
	<p>&copy; Copyright 2015 Online ticket reservation | All Rights Reserved <br /></p>
</div>
	  
	  </body>
	  </html>
	  
	  <?php
require 'core.inc.php';
require 'connect.inc.php';
if (loggedin()) {
	$firstname = getuserfield('firstname');
	$lastname = getuserfield('lastname');
	echo 'You are logged in! '.$firstname.' '.$lastname.'';
	echo '.<br><br><a href="logout.php">Log out</a><br>';
} else {
	include 'checklogin.inc.php';
}


?>

<?php


  if(isset($_POST['insert_post'])){
	  
	   $adminid = getuserfield('adminid');
	   $admin_name = getuserfield('admin_name');
       $bname = $_POST['bname'];
	   $type = $_POST['type'];
       $fromd = $_POST['fromd'];
	   $tod = $_POST['tod'];
	   $seat = $_POST['seat'];
	   $year = $_POST['year'];
	   $month = $_POST['month'];
	   $day = $_POST['day'];
	   $time = $_POST['time'];
	   
	   
	   
    $insert_data = "insert into bus_info
	(adminid,admin_name,bname,type,fromd,tod,seat,year,month,day,time) values (
    '$adminid','$admin_name','$bname','$type','$fromd','$tod','$seat','$year','$month','$day','$time')";
	   
	   $insert_da = mysqli_query($con, $insert_data);
	   if($insert_da){
		   echo "<script>alert('Your Information Has Been Recorded!')</script>";
		   echo "<script>window.open('fetch.php','_self')</script>";
		   //header('Location: fetch.php');
	   }
	   
	   
   }





?>
	  