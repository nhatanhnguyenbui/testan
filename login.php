<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php ?>
<link rel="stylesheet" href="../css/login.css">
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

	<div>
		<div class="login"><h1>LOGIN</h1></div> 
		
		<form action="#" method="POST">
		<div align="center">
			<div><input class="input-login" type="text" name="user" class="input" placeholder="Account"></div>
		
			<div><input class="input-login" type="password" name="password" class="input" placeholder="Password"></div>

			<div><input class="login-button" type="submit" value="Log In" name="submit"></div>
	<?php 	
	require_once('./dbshoes.php');
	
if(isset($_POST['user']) && isset($_POST['password'])){
	$u = $_POST['user'];
	$p = $_POST['password'];
	$sql = "select * from account where usernames ='" . $u . "'and password='". $p."'";
	$rows = query($sql);
	  
	if(count($rows)>0 ){
      $_SESSION['us'] = $u;
      echo "login success";
  		header("location:admin-page.php");
  		echo $sql;
  	}
  	else{
  		
  		echo $sql;
  	}
}
   ?>	
   </form>
   	

		</div>
	</div>
</body>
</html>
		

