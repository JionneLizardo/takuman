<?php
 $db = new PDO("mysql:host=localhost;dbname=shopping","root","");
 $command = "DELETE FROM customers WHERE email_address =" . $_GET["id"];
 $result = $db->query($command);
 if($result){
 	echo "Thank you! Record has been deleted.\n";
 }
 else{
 	echo "Record did not delete";
 }
 
?>
<a href="AdminHome.php">Go back</a>

