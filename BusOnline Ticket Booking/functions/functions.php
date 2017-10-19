<?php

$con = mysql_connect("localhost","root","","online");

function updatebus(){
	
	global $con;

	$get_name = "select * from bus_name";
	$run_name = mysql_query($get_name, $con);
	
	while ($row_name=mysql_fetch_array($run_name)){
		
		$busname_id = $row_name['busname_id'];
		$bus_name = $row_name['bus_name'];
		
	echo "<option >$bus_name</option>";	
	}
}


function getdata(){
	global $con;
	$get_da= "select * from bus_info order by RAND() LIMIT 0,6";
	$run_da = mysqli_query($con, $get_da);
	while($row_da=mysqli_fetch_array($run_da)){
		
		$da_id = $row_da['busid'];
		$da_name = $row_da['name'];
		$da_type = $row_da['type'];
		$da_fromd = $row_da['fromd'];
		$da_tod = $row_da['tod'];
		$da_seat = $row_da['seat'];
		$da_year = $row_da['year'];
		$da_month = $row_da['month'];
		$da_day = $row_da['day'];
		$da_time = $row_da['time'];
		
		echo "
		<div id='single_data'>
		<h3>$da_year</h3>
		
		</div>
		
		";
		
		
	}
}


?>