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
<link rel="stylesheet" type="text/css" href="css/brand.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<title>Choose your Brand Chrono-Ticks</title>
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

<div id=login>
	<a href="destroy.php"><span style="font-family:Righteous, sans-serif;"id="logoutButton">Log Out</span></a><br><br>
</div>







<br>

<div style="font-family: Righteous, sans-serif; color:#f9dfdc;" id="header"> Choose Your Brand</div>

<table cellspacing="30px" cellpadding="10px">
<tr>

<td><div id="rolex"> 
<a href="rolex.php" style="text-decoration: none;">
<img class="circle" src="res/main/rolex.png">
<p style="font-family: Righteous, sans-serif;"><strong>Rolex</strong></p>
</a>
</div></td>

<td><div id="zenith">
<a href="hublot.php" style="text-decoration: none;">
<img class="circle" src="res/main/zenith.png">
<p style="font-family: Righteous, sans-serif;"><strong>Hublot</strong></p>
</a>
</div></td>

<td><div id="hublot">
<a href="zenith.php" style="text-decoration: none;">
<img class="circle" src="res/main/hublot.png">
<p style="font-family: Righteous, sans-serif;"><strong>Zenith</strong></p>
</a>
</div></td>
</tr>
</table>

</body>
</html>