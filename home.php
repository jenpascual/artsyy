<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page - ArtsyyArtist</title>
	<link rel="stylesheet" type="text/css" href="../homepage_style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<!-------- navbar admin ----------->
	<div class="header">
	</div>
	<div class="content">
		<
		<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="../images/artsyyartistlogo.png" width="150px">
				</div>
				<nav>
					<ul id="MenuItems">
						<!--link for admin page --><li><a href="adminpage.php">Home</a></li>
						<li><a href="../products.php">Product</a></li>
						<!-- <li><a href="">About</a></li>
						<li><a href="">Contact</a></li> -->
						<!--link for admin account --><li><a href="home.php">Account</a></li>
					</ul>
				</nav>
				<a href="../mycart.php"><img src="../images/cart.png" width="30px" height="30px"></a>
				<img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>

		<!-- logged in user information -->
		<div class="profile_info">
			<div class="row">
				<div class="col-5">
			<img src="../images/admin_profile.jpg" width="10%" >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>