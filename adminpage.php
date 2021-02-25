<?php
	$msg = "";
	// ---------- if add product is click ---------
	if (isset($_POST['upload'])) {
		// path to store added product
		$target = "images/".basename($_FILES['product_image']['name']);

		// connect to database
		$db = mysqli_connect("localhost", "root", "", "aa_db");

		// get all the submitted data from the form
		$product_image = $_FILES['product_image']['name'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_description = $_POST['product_description'];
		$category = $_POST['category'];

		$sql = "INSERT INTO products (product_image, product_name, product_price, product_description, category ) VALUES ('$product_image', '$product_name', '$product_price', '$product_description', '$category')";
		mysqli_query($db, $sql); // store the submitted data into db table: products

		if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
			$msg = "Prodcut added successfuly";
		}
		else {
			$msg = "There was a problem adding product";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page - ArtsyyArtist</title>
	<link rel="stylesheet" type="text/css" href="../homepage_style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-------- navbar admin ----------->
<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="../images/artsyyartistlogo.png" width="150px">
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="adminpage.php">Home</a></li>
						<li><a href="../products.php">Product</a></li>
						<!-- <li><a href="">About</a></li>
						<li><a href="">Contact</a></li> -->
						<li><a href="home.php">Account</a></li>
					</ul>
				</nav>
				<a href="mycart.php"><img src="../images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
	<div class="content">
		<form method="POST" action="adminpage.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="product_image">
			</div>
			<div>
				<input type="text" name="product_name">
			</div>
			<div>
				<input type="text" name="product_price">
			</div>
			<div>
				<textarea name="product_description" cols="40" rows="4" placeholder="Enter product description..."></textarea>
			</div>
			<div>
				<input type="text" name="category">
			</div>
			<div>
				<button class="btn" type="submit" name="upload" value="Upload Product">Add Product</button>
			</div>
		</form>
	</div>

</body>
</html>