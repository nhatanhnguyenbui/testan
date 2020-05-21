<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');

 ?>
<link rel="stylesheet" href="../css/cart-style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header class="header">
	
	<div class="row1">
		<a href="home.php"><img src="../image/logo.svg" alt="loading" class="logo"></a>
	
		<nav class="nav_links">
			<ul class="u">
				<li><a class="bar" href="about.php">ABOUT</a></li>
				<li><a class="bar" href="services.php">SERVICES</a></li>
				<li><a class="bar" href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>
	</div>



	<div class="row2">
		<a href="#"><img src="../image/cart_empty.svg" alt="loading" class="cart-logo"></a>
			
		<div class="search-container">
			<form action="#">
				<button class="search-button" type="submit"><i class="fa fa-search"></i></button>
				<input class="input" type="text" placeholder="Search" name="search">
			</form>
		</div>
				
		<a href="listpage1.php"><button class="shop-now">SHOP NOW</button></a>
	
	</div>

	<label for="nav-toggle" class="nav-toggle-label">
		<span style="color: white"></span>
	</label>
	

</header>

<div class="offset-header"></div>

<body>

	<div class="yourcart"><h1>THANKS FOR BUYING WITH US!</h1></div>

	<div class="return-div"><a href="listpage1.php"><button class="return">RETURN TO SHOP</button></a>
</body>
</html>