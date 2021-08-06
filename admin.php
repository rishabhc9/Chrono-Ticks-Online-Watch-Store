 <?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="res/chrono.png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<title>Admin | Chrono-Ticks</title>
<style type="text/css">
		#logo{			
			width: 20.1%;
			float: left;
		}
		body{
			margin-top: 3em;
			margin-left: 3em;
		}
	</style>
</head>
<body bgcolor=black>
<div id="logo">
	<img src="res/chronoticks.png" width="100%">
	<div style="color:#f9dfdc;font-family:Righteous, sans-serif;letter-spacing:1.2px;margin-left:45px;">User:<?php echo $_SESSION['username'];?></div>
</div>

<div id=login style="float: right;">
	<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
	
</div>
<br>

<div style="color:#f9dfdc;margin-left:92px;" id="header"> <strong>Select Option</strong> </div>

<table cellspacing="30px" cellpadding="5px">
<tr>
<td>
<div style="font-family: Righteous, sans-serif;margin-left:2px;" id="website">
	<table>
	<tr>
	<td>
	<a href="brand.php" target="_blank" style="text-decoration: none;">	
	</td>

	<td>
	<a href="brand.php" target="_blank" style="text-decoration: none;">
	<p style="font-family: Righteous, sans-serif;margin-left:230px;letter-spacing:1.6px;"><strong>&nbsp;&nbsp;Visit Website</strong></p>
	</a>
	</td>

	<td>
	<a href="brand.php" target="_blank" style="text-decoration: none;">&nbsp;
	
	</td>


	</tr>
	</table>
</div>
</td>
</tr>

<tr>
<td>
<div style="font-family: Righteous, sans-serif;margin-left:2px;" id="inventory">
	<table>
	<tr>
	<td>
	<a href="inventory.php" style="text-decoration: none;">

	</td>

	<td>
	<a href="inventory.php" style="text-decoration: none;">
	<p style="font-family: Righteous, sans-serif;margin-left:230px;letter-spacing:1.6px;"><strong>&nbsp;&nbsp;View Inventory</strong></p>
	</a>
	</td></tr>
	</table>
</div>
</td>

</tr>
</table>

</body>
</html>