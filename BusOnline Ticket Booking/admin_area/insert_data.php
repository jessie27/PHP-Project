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
	    <td colspan="8"><h2>Insert New Data Here</h2></td>
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
		
	echo "<option value='$busname_id'>$bus_name</option>";	
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
		
	echo "<option value='bustype_id'>$type_name</option>";	
	}
		
		?>
		</select>
		
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Date:<b></td>
		<td><input type="date" name="date" required/></td>

	  </tr>
	   
	   <tr>
	    <td align="right"><b>Time:</b></td>
		<td><input type="time" name="time required" /></td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>From:</b></td>
		<td>
		<select name="from" required>
		<option>Select type</option>
		<?php
	$get_from = "select * from from";
	$run_from = mysqli_query($con, $get_from);
	
	while ($row_type=mysqli_fetch_array($run_type)){
		
		$from_id = $row_type['from_id'];
		$from_dis = $row_type['from_dis'];
		
	echo "<option value='from_id'>$type_name</option>";	
	}
		
		?>
		</select>
		</td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>To:</b></td>
		<td><input type="text" name="to" required/></td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Fare:</b></td>
		<td><input type="text" name="fare" required/></td>
	  </tr>
	  
	  <tr>
	    <td align="right"><b>Seat quantity:</b></td>
		<td><input type="text" name="seat" required/></td>
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
	   
   $insert_data = "insert into bus_name () values ()";
	   
	   
	   
	   
	   
	   
	   
   }







?>

