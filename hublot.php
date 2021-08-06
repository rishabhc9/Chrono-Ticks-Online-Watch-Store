<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hublot Watches| Chrono-Ticks</title>
	<link rel="icon" href="res/chrono.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/content.css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		body{
			margin: 0;						
		}
		#logo{
			padding-top: 0.7%;			
			background-color: #333;
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
		}
	</style>
	
</head>

<body>

<div id="logo">
	<a href="brand.php">
		<img src="res/chronoticks.png" width="81%">
	</a>
</div>


<div id="sidebar">
	<ul>
		<li style="color: #f9dfdc;" >Welcome <?php echo $_SESSION['username'];?><br>Shop Now With Us</li>
	
		<li style="border: 1px solid #f9dfdc;"><a href="#cart"><table><tr><td><img src="res/icons/cart.png" />
		<td>&nbsp;Shopping Cart</td></tr></table></a></li>
		
		<li style="border: 1px solid #f9dfdc;"><a href="view_cart.php" target="_blank" ><table><tr><td><img src="res/icons/checkout.png" /></td>
		<td>&nbsp;Checkout&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></a></li>

		<li style="border: 1px solid #f9dfdc;">
			<a href="destroy.php"> 
			<table><tr><td><img src="res/icons/logout.png" /></td>
			<td>&nbsp;Logout</td></tr></table></a>
		</li>

				
		<li style="border: 1px solid #f9dfdc;"><a href="contact.html" target="_blank"><table><tr><td><img src="res/icons/request.png" /></td>
		<td>&nbsp;Contact Us&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></a></li>
	
		<li style="border: 1px solid #f9dfdc;"><a href="blog.html" target="_blank"><table><tr><td><img src="res/icons/buy.png" /></td>
		<td>&nbsp;Buying Guide&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></a></li>
		
	</ul>
</div>

<div id="navbar">
<ul>
		<li style="border: 1px solid #f9dfdc;" ><a  href="rolex.php">Rolex</a></li>
		<li style="border: 1px solid #f9dfdc;"><a class="active" href="hublot.php">Hublot</a></li>
		<li style="border: 1px solid #f9dfdc;"><a href="zenith.php">Zenith</a></li>		
	</ul>
</div>


<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>

<!--CONTENT-->

<div class="content">
	<section class="container">

<!-- View Cart Box Start -->

<div id="cart">
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<thead><tr><th>Quantity</th><th>Brand</th><th>Name</th><th>Remove</th></tr></thead>';
	echo '<tbody>';


	$total =0;
	$b = 0;


	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$brand = $cart_itm["brand"];
		$category = $cart_itm["category"];
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe



		echo '<tr class="'.$bg_color.'">';
		echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$brand.'</td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}

	echo '<tr><td>&nbsp;</td></tr>';
	echo '<tr>';
	
	echo '<td>&nbsp;</td>';
	echo '<td>';
	echo '<button type="submit" id="myButton">Update</button></td>';


	echo '<td><a href="view_cart.php" id="myButton" style="width: 18%; padding-left: 8px;">Checkout</a>';
	echo '</td>';
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	

}
?>
</div>
<!-- View Cart Box End -->

<!-- Products List Start CLOTHING -->
<h3 style="color:#333; margin-left:450px;font-size:3em">Hublot Watches</h3>
<div class="row" id="clothing">
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price FROM products WHERE category='watch' AND brand='Hublot' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';
//fetch results set as object and output HTML

while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<img src="res/hublot/{$obj->product_img_name}">
	<p align="center">{$obj->product_name}</p>
	<p align="center" style="font-size: 1.2em;">{$currency}{$obj->price} </p>
	
	
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	
	<div align="center">
		<label>Quantity: </label>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;
		<button type="submit" class="add_to_cart" id="myButton">Add to Cart</button>
	</div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
<!-- Products List End CLOTHING -->
</div>


<!-- Products List Start ACC -->





<!-- Products List Start SOU -->

<!-- Products List End SOU -->
</div>


</section>
</div>



<!--FOOTER-->

<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; Chrono-Ticks 
		</p>

		<ul class="col-sm-6">
			
			<li class="col-sm-1">
				<a href="#" target="_blank">
					<img src="res/social media/twitter.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="#" target="_blank">
					<img src="res/social media/facebook.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="#" target="_blank">
					<img src="res/social media/instagram.png">
				</a>
			</li>
			
		</ul>
	</div>
</footer>



</body>
</html>