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
	$query = "SELECT * FROM products";
	$result = $db->query($query);
?>

<table>
	<tr><td><b>ID</b></td><td><b>Item Code</b></td><td><b>Item Name</b></td><td><b>Brand Name</b></td>
		<td><b>Model Number</b></td>
		<td><b>Weight</b></td>
		<td><b>Dimension</b></td>
		<td><b>Description</b></td>
		<td><b>Category</b></td>
		<td><b>Quantity</b></td>
		<td><b>Price</b></td>
		<td><b>Image Name</b></td>
		<td><b>Delete</b></td></tr>
	<?php
	while($myrow = $result->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td align = \"center\">";
		echo"<td>";
		echo $myrow["id"]. "</td>";
		echo $myrow["item_code"]."</td>";
		echo"<td>";
		echo $myrow["item_name"]."</td>";
		echo"<td>";
		echo $myrow["brand_name"]."</td>";
		echo"<td>";
		echo $myrow["model_number"]."</td>";
		echo"<td>";
		echo $myrow["weight"]."</td>";
		echo"<td>";
		echo $myrow["dimension"]."</td>";
		echo"<td>";
		echo $myrow["description"]."</td>";
		echo"<td>";
		echo $myrow["category"]."</td>";
		echo"<td>";
		echo $myrow["quantity"]."</td>";
				echo"<td>";
		echo $myrow["price"]."</td>";
				echo"<td>";
		echo $myrow["imagename"]."</td>";

		echo "<td align=\"center\">";
		?>
		<a href="deleteproduct.php?id=<?php echo $myrow["id"]; ?>">Delete<?php echo"</td></tr>";?></a>
		<?php
	}
	$result->closeCursor();
	$db = null;
	
	?>
	</table>
</body>
</html>