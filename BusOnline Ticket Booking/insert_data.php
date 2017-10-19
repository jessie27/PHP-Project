<!DOCTYPE>
<?php
include("db.php");
?>
<html>
<head>
<title>Inserting Data</title>

</head>

<body bgcolor="lightgrey">


<form action="insert_data.php" method="post" enctype="multipart/form-data">
   <table align="center" width="600" border="2" bgcolor="skyblue">
   
      <tr align="center">
	    <td colspan="8"><h2>Select Here</h2></td>
	  </tr>
	  
      <tr>
	    <td align="right"><b>Bus name:</b></td>
		<td>
		<select name="name" required>
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
  <?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
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
	    <td align="right"><b>From:</b></td>
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
	    <td align="right"><b>To:</b></td>
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
	    
		<td colspan="8"><input type="submit" name="insert_post" value="insert now" /></td>
	  </tr>
	   
	   
    </table>	





</body>
</html>


<?php
   if(isset($_POST['insert_post'])){
	   
       $name = $_POST['name'];
	   $type = $_POST['type'];
       $fromd = $_POST['fromd'];
	   $tod = $_POST['tod'];
	   $seat = $_POST['seat'];
	   $year = $_POST['year'];
	   $month = $_POST['month'];
	   $day = $_POST['day'];
	   $time = $_POST['time'];
	   
    $insert_data = "insert into bus_info
	(name,type,fromd,tod,seat,year,month,day,time) values ('
    $name','$type','$fromd','$tod','$seat','$year','$month','$day','$time')";
	   
	   $insert_da = mysqli_query($con, $insert_data);
	   if($insert_da){
		   echo "<script>alert('Your Information Has Been Recorded!')</script>";
		   echo "<script>window.open('insert_data.php','_self')</script>";
	   }
	   
	   
   }





?>

