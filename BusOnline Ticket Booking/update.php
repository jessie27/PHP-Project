
<html>

<head>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","","online");
if (!$con){
	die("can not connect : " . mysql_error());
}
mysql_select_db("online",$con);

if (isset($_POST['update'])){
	$UpdateQuery = "UPDATE bus_info SET  username='$_POST[Username]', bname='$_POST[Busname]', 
	type='$_POST[Bustype]', fromd='$_POST[Leaving_From]', tod='$_POST[Going_To]', seat='$_POST[Seat_Quantity]',
	year='$_POST[Year]', month='$_POST[Month]', day='$_POST[Day]', time='$_POST[Time]'
	WHERE username='$_POST[hidden]'";
	mysql_query($UpdateQuery, $con);
	
};



$sql= "SELECT * FROM bus_info";
$myData = mysql_query($sql,$con);		
echo "<table align=center border=1>
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
	echo "<form action=update.php method=post>";
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
	echo "</form>";	
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>