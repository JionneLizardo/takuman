<?php
 $id = $_REQUEST['id'];
 $db = new PDO("mysql:host=localhost;dbname=shopping","root","");
 $command = "DELETE FROM `products` WHERE id=$id";
 $result = $db->query($command);
 if($result){
 	echo "Thank you! Product has been deleted.\n";
 }
 else{
 	echo "Product did not delete";
 }
 
?>
<a href="AdminProductview.php">Go back</a>