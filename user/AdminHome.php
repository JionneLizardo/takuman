<!DOCTYPE html>
<html>
<head>
	<?php
	include('topmenu.php');
	?>
	<title>Welcome Admin</title>
	<h1>Welcome Admin these are the account that are active</h1>
</head>
<body>
<?php
	$db = new PDO("mysql:host=localhost;dbname=shopping","root","");
	$query = "SELECT email_address, complete_name, country FROM customers";
	$result = $db->query($query);
?>
<table>
	<tr><td><b>Email Address</b></td><td><b>Name</b></td><td><b>Country</b></td><td><b>Delete</b></td></tr>
	<?php
	while($myrow = $result->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td align = \"center\">";
		echo"";
		echo $myrow["email_address"]."</td>";
		echo"<td>";
		echo $myrow["complete_name"]."</td>";
		echo"<td>";
		echo $myrow["country"]."</td>";
		echo "<td align=\"center\">";
		?>
		<a href="deletecustomer.php?id=<?php echo $myrow["email_address"]; ?>">Delete<?php echo"</td></tr>";?></a>
		<?php
	}
	$result->closeCursor();
	$db = null;
	
	?>
	</table>
</body>
</html>