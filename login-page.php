<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ArtsyyArtist</title>
	<link rel="stylesheet" type="text/css" href="homepage_style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		
	</div>
	<div class="content">
		<!-- yung navbar galing sa index nilagay ko lang -->
		<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="images/artsyyartistlogo.png" width="150px">
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Product</a></li>
						<!-- <li><a href="">About</a></li>
						<li><a href="">Contact</a></li> -->
						<li><a href="login-page.php">Account</a></li>
					</ul>
				</nav>
				<a href="mycart.php"><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
		<!-- logged in user information -->
		<div class="profile_info">
			<!-- nilagyan ko row for responsive -->
			<div class="row">
				<div class="col-5">
			<img src="images/user_profile.jpg" width="30%"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="login-page.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>