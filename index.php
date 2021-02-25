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
	<!-------- navbar ----------->
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
						<!--link for user account --><li><a href="login-page.php">Account</a></li>
					</ul>
				</nav>
				<a href="mycart.php"><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
			<div class="row">
				<div class="col-2">
					<h1>Give Your Life<br>A Brand New Art!</h1>
					<p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
					<a href="products.php" class="btn">Explore Now &#8594;</a>
				</div>
				<div class="col-2">
					<img src="images/Acrylic Paint.png" width="349px">
				</div>
			</div>
		</div>
	</div>

	<!-- featured categories -->
	<div class="categories">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<img src="images/Acrylic Paint.png">
				</div>
				<div class="col-3">
					<img src="images/Acrylic Paint.png">
				</div>
				<div class="col-3">
					<img src="images/Acrylic Paint.png">
				</div>
			</div>
		</div>
	</div>

	<!-- featured products -->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
		</div>

		<!-- latest product -->
		<h2 class="title"> Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
			<div class="col-4">
				<img src="images/Acrylic Paint.png">
				<h4>Acrylic Paint</h4>
				<p>&#8369;100.00</p>
			</div>
		</div>
	</div>

	<!-- offer -->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/Acrylic Paint.png" width="200px" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively Available on ArtsyyArtist</p>
					<h1>Acrylic Paint</h1>
					<small>
						The Acrylic Paint 4 features a 39.9% larger (than Acrylic Paint 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.
					</small><br>
					<a href="" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>

	<!--------- testimonial --------->
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<img src="images/user-1.png">
					<h3>Sean Parker</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<img src="images/user-2.png">
					<h3>Mike Smith</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<img src="images/user-3.png">
					<h3>Mabel Joe</h3>
				</div>
			</div>
		</div>
	</div>

	<!-- ----- brands ------ -->
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-godrej.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and IOS Mobile Phone.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/artsyyartistlogo.png" width="150px">
					<p>Our Purpose Is To Sustainably Make The Pleasure and Benefits of Art Accesible To Many.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policiy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>YouTube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2021 - ArtsyyArtist</p>
		</div>
	</div>

	<!-- -------------- js -------------- -->
	<script type="text/javascript" src="script.js"></script>

</body>
</html>