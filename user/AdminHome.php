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
	<h2><a href="AdminProductView.php">Click here to view added products</a></h2>
	<h3><a href="AdminRegistration.php">Click here to add more admins</a></h3>
<?php
	$db = new PDO("mysql:host=localhost;dbname=shopping","root","");
	$query = "SELECT id, email_address, complete_name, country FROM customers";
	$result = $db->query($query);
?>


<form method="get" >
<table>
	<tr><td><b>ID</b></td> <td><b>Email Address</b></td><td><b>Name</b></td><td><b>Country</b></td><td><b>Delete</b></td></tr>
	<?php
	while($myrow = $result->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td align = \"center\">";
		echo $myrow["id"];
		echo "<td>";
		echo $myrow["email_address"]."</td>";
		echo"<td>";
		echo $myrow["complete_name"]."</td>";
		echo"<td>";
		echo $myrow["country"]."</td>";
		echo "<td align=\"center\">";
		?>
		<a href="deletecustomer.php?id=<?php echo $myrow["id"]; ?>">Delete<?php echo"</td></tr>";?></a>
		<?php
	}
	$result->closeCursor();
	$db = null;
	
	?>
	</table>
</form>
</body>
</html>