<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Takuman Emporium</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<table  width="100%" cellspacing="0" cellpadding="2">
	<col style="width:30%">
	<col style="width:40%">
        	<col style="width:20%">
	<tr><td style="background-color:cyan;color:Blue;"></td><td style="background-color:cyan;color:Blue;"></td><td style="background-color:cyan;color:Blue;">
<?php
	if (session_status() == PHP_SESSION_NONE) {
    		session_start();
	}
	echo "<span id=\"userinfo\"><a href=\"signin.php\">Login</a> &nbsp;&nbsp;&nbsp;<a href=\"validatesignup.php\">Signup</a></span></td></tr>";
?>
	<tr><td style="font-size: 35px;color:blue;background-color:cyan;">
    	<b>Takuman Emporium</b></font></td>
	<td bgcolor="cyan">
	<form  method="post" action="searchitems.php">  
		<input  size="50" type="text" name="tosearch">  
		<input  type="submit" name="submit" value="Search">  
	</form></td>
	<td bgcolor="cyan" ><a href="cart.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="images/cart.png"></img><span id="cartcountinfo"></span></a></td></tr>
</table>
<div class="container">
	<nav>
      	<ul class="nav">
        		<li><a href="index.php">Home</a></li>
        		<li><a href="index.php">Figurines</a></li>
            	<li><a href="index.php">Nendoroids</a></li>
      	</ul>
    	</nav>
</div>
<p>