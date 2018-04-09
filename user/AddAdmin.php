<?php
include('topmenu.php');
$connect = mysqli_connect("localhost", "root", "", "shopping") or die ("Please, check the server connection.");
$email_address = $_POST['emailaddress'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$completename = $_POST['complete_name'];
$sql = "INSERT INTO admin (email_address, password, complete_name) VALUES ('$email_address',(PASSWORD('$password')), '$completename')";
$result = mysqli_query($connect, $sql) or die(mysql_error());
if ($result)
{
?>
	<p>
  	The Admin Account you added has been created
  	<a href="AdminRegistration.php">Add more?</a>
  	<a href="Adminhome.php">Go home</a>
  </p>
<?php
 }
else
{
 	echo "Some error occurred. Please use different email address";
}
?>

?>