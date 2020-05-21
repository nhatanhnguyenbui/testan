<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');

 ?>
<link rel="stylesheet" href="../css/product-detail.css">
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

<body>
	
	<div class="offset-header"></div>
	<div class="offset"></div>

	<div class="body">
		
		<div>
			<?php 
			if (isset($_GET['productid'])) {
				# code...
				$sql = "select * from product where ProductId=	". $_GET['productid'];
			}
			else
			{
				$sql = "select * from product";
			}
					$productid = query($sql);
					$rows= query($sql);
					for ($i=0; $i < count($rows); $i++) { 
			 ?>
			<div class="shoesimg"><img src="../<?=$rows[0][3]?>" alt="loading"></div>
		</div>


		<div class="info">
		
			<div class="shoes-title"><?=$rows[$i][2]?></div>
			
			<div class="price">Price: $<?=$rows[0][5]?> </div>

			<div class="shoes-info"><?=$rows[$i][6]?></div>

			<a href="cart.php?productid=<?=$productid[$i][0]?>"><button id="snackbar"  class="add-to-cart" onclick="myFunction()" >ADD TO CART</button></a>
			<?php } ?>
		</div>
			
		<script>
			function myFunction() {
			  var x = document.getElementById("snackbar");
			  x.className = "show";
			  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			}
		</script>
		
	</div>
</body>
</html>