<?php
include('topmenu.php');
$connect = mysqli_connect("localhost", "root", "", "shopping") or die ("Please, check the server connection.");
$email_address = $_POST['emailaddress'];
$password = $_POST['password'];

$completename = $_POST['complete_name'];
$sql = "UPDATE admin (email_address, password, complete_name) VALUES ('$email_address',(PASSWORD('$password')), '$completename')";
$result = mysqli_query($connect, $sql) or die(mysql_error());
if ($result)
{
?>
	<p>
  	The Admin Account has been updated
  	<a href="Adminhome.php">Go home</a>
  </p>
<?php
 }
else
{
 	echo "Some error occurred. Please check the information placed";
}
?>

?>