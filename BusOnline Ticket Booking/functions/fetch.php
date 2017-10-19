<html>
<?php
include("db.php");
?>
<head>
</head>
<body>
<?php
if (!$con){
	die("can not connect : " . mysql_error());
}
mysql_select_db("online",$con);
$sql= "SELECT * FROM bus_info";
$myData = mysql_query($sql,$con);
echo "<table border=1>
<tr>
<th>Userid</th>
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
	echo "tr>";
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
	echo "</tr";	
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>