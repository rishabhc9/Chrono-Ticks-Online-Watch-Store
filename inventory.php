<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventory | Chronoticks</title>
	<link rel="icon" href="res/chrono.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar2.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/content.css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		
		#logo{
			padding-top: 0.7%;	
			margin-left: 15px;					
			width: 14%;
			height: 62px;
			float: left;	
			position: fixed;		
		}
		td{
			padding: 5px;
		}

		th{
			padding: 5px;
			font-size: 20px;
			text-align: center;
		}


	</style>
	
</head>

<body>

<div id="logo">
	<a href="admin.php">
		<img src="res/chronoticks.png" width="100%">
	</a>
</div>
<br>
<div id="sidebar">
	<ul>
			
		<li>
			<a href="destroy.php"> 
			<table><tr><td><img style="margin-left:50px;" src="res/icons/logout2.png" /></td>
			<td style="margin-left:50px;">&nbsp;Logout</td></tr></table></a>
		</li>

		<li>&nbsp;</li>
		
	</ul>
</div>

<div style="padding: 35.5px 20.55em;float:right;" id="navbar">	
		<li><a class="active" href="inventory.php">Inventory</a></li>
		<li><a href="add_product.php">Add Product</a></li>
</div>


<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>

<!--CONTENT-->

<div class="content">
	<section class="container">

<?php
$results = $mysqli->query("SELECT id,product_code, product_name, category, brand, price, product_qty FROM products  ORDER BY id ASC");
if($results){ 
$products_item = '<table border="1" bordercolor="white" style="color:white;"><th>ID</th><th>Product Code</th><th>brand</th><th>Category</th><th>Product Name</th><th>Price</th><th>Product Quantity</th>
';//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<tr>
	<td><p align="center">{$obj->id}</p></td>
    <td><p align="center">{$obj->product_code}</p></td>
    <td><p align="center">{$obj->brand}</p></td>
    <td><p align="center">{$obj->category}</p></td>
	<td><p align="center">{$obj->product_name}</p></td>
    <td><p align="center">{$currency}{$obj->price}</p></td>
    <td><p align="center">{$obj->product_qty}</p></td>
	</tr>
		
EOT;
}
$products_item .= '</table>';
echo $products_item;
}
?>    
</div>




</section>
</div>






</body>
</html>