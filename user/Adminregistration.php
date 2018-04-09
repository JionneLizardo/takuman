<!DOCTYPE html>
<html>
<head>
	<?php
	include('topmenu.php');
	?>

	<style src="style.css"></style>
	<script language="JavaScript" type="text/JavaScript" src="checkform.js"></script>
	<title>Adding Admin</title>
	<h1> Add Admin here</h1>
</head>
<body>
	<form action="addadmin.php" method="post" onsubmit="return validate(this);">
		<table border="0" cellspacing="1" cellpadding="2">
			<tr><td>Email Address: </td><td> <input size="20" type="text" name="emailaddress"><span id="emailmsg"></span></td></tr>
  			<tr><td>Password: </td><td>  <input size="20" type="password" name="password"><span id="passwdmsg"></span></td></tr>
  			<tr><td>ReType Password:  </td><td> <input size="20" type="password" name="repassword"><span id="repasswdmsg"></span></td></td></tr>
  			<tr><td>Complete Name  </td><td> <input size="50" type="text" name="complete_name"><span id="usrmsg"></span></td></tr>
   					<tr><td><input type="submit" name="submit" value="Submit"> </td><td> 
    			<input type="reset" value="Cancel"></td></tr>
</body>
</html>