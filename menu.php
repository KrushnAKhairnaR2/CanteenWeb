<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DYP Canteen - Menu</title>
	<link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./images/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/custom.css">

</head>

<body>

	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			<a class="navbar-brand logoDYP" href="#"><img src="./images/favicon.png" style="width: 80px;height:80px;border-radius: 50px;" alt=""/></a>
				<div class="logo">Canteen</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="Index_login.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about_login.html">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact_login.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="Add_to_cart.php">CART</a></li>
						<li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Hundreds of flavors under one roof.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" id="allbtn" data-filter=".all">Famous Dishes</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".Breakfast">Breakfast</button>
							<button data-filter=".lunch">Lunch & Dinner</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Drinks -->
			<div class="row special-list">
				<form action="manageCart.php" method="post" >
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/Tea-1.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Tea</h4>
								<p>Indian famous bevarage</p>
								<h5> &#8377;15.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button type="submit" class="addtocartbtn" name = "Add_to_cart">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Tea">
						<input type="hidden" name="Price" value="15">
					</div>
				</form>

				<form action="manageCart.php" method="post" >
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/lassi_2.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Lassi</h4>
								<p>Indian famous bevarage</p>
								<h5> &#8377;40.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button type="submit" class="addtocartbtn"name = "Add_to_cart">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Lassi">
						<input type="hidden" name="Price" value="40">
					</div>
				</form>
				
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/latte-coffee-cup_3.avif" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Coffee</h4>
								<p>Indain special coffee</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button  class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Coffee">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>
				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/nimbusharbat.webp" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Nimbu Sharbat</h4>
								<p>Cold Nimbu Sharbat</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Nimbu Sharbat">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>
				
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/colddrinks.webp" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Coldrinks</h4>
								<p>Energy Drink</p>
								<h5> &#8377;30.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Coldrinks">
						<input type="hidden" name="Price" value="30">
					</div>
				</form>
			
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/green tea.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Green Tea</h4>
								<p>Himalayan Green Tea</p>
								<h5> &#8377;25.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Green Tea">
						<input type="hidden" name="Price" value="25">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/Mango juice.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Mango Juice</h4>
								<p>Summer Special Mango juice</p>
								<h5> &#8377;25.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Mango Juice">
						<input type="hidden" name="Price" value="25">
					</div>
				</form>

				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/Taak-2.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Taak</h4>
								<p>Punjabi Taak</p>
								<h5> &#8377;25.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Punjabi Taak">
						<input type="hidden" name="Price" value="25">
					</div>
				</form>
				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/Mattha.webp" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Mattha</h4>
								<p>Special Mattha</p>
								<h5> &#8377;25.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Mattha">
						<input type="hidden" name="Price" value="25">
					</div>
				</form>
				
				<!-- Breakfast -->
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast all">
						<div class="gallery-single fix">
							<img src="images/pohe.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Poha</h4>
								<p>Marathi Special Pohe</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Poha">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast all">
						<div class="gallery-single fix">
							<img src="images/samosa.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>samosa</h4>
								<p>famous Samosa</p>
								<h5> &#8377;15.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="samosa">
						<input type="hidden" name="Price" value="15">
					</div>
				</form>

				<form action="manageCart.php" method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast all">
						<div class="gallery-single fix">
							<img src="images/WadaPav.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Wadapav</h4>
								<p>Pune Famous Wadapav</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Wadapav">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>
				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid Breakfast">
						<div class="gallery-single fix">
							<img src="images/Menduwada.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Mendu Vadda</h4>
								<p>South Indian Mendu Wadda</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Mendu Vadda">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast all">
						<div class="gallery-single fix">
							<img src="images/Idlli.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Idlli</h4>
								<p>South Indian Idlli</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Idlli">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast">
						<div class="gallery-single fix">
							<img src="images/uttapam.webp" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Uttapam</h4>
								<p>Delicious Uttapam</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Uttapam">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast">
						<div class="gallery-single fix">
							<img src="images/Upma.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>upma</h4>
								<p>Famous Upma</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="upma">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast">
						<div class="gallery-single fix">
							<img src="images/Pasta.jpg" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Pasta</h4>
								<p>Special Pasta with arabic masala</p>
								<h5> &#8377;20.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Pasta">
						<input type="hidden" name="Price" value="20">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid Breakfast">
						<div class="gallery-single fix">
							<img src="images/Maggi.webp" class="img-fluid" style="height: 235px; width: 350px;" alt="Image">
							<div class="why-text">
								<h4>Maggi</h4>
								<p>Famous Maggi</p>
								<h5> &#8377;30.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Maggi">
						<input type="hidden" name="Price" value="30">
					</div>
				</form>

				<!-- Lunch &  Dinner-->
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/Rice Plate_4.jfif" class="img-fluid" style="height: 235px;" alt="Image">
							<div class="why-text">
								<h4>RicePlate</h4>
								<p>Delicious Rice plate</p>
								<h5> &#8377;60.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="RicePlate">
						<input type="hidden" name="Price" value="60">
					</div>
				</form>
				
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/dosa.webp" class="img-fluid" style="height: 235px;" alt="Image">
							<div class="why-text">
								<h4>Dosa</h4>
								<p>South Indian famous dosa</p>
								<h5> &#8377;50.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Dosa">
						<input type="hidden" name="Price" value="50">
					</div>
				</form>
				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid lunch">
						<div class="gallery-single fix">
							<img src="images/Fried_rice_2.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Fried Rice</h4>
								<p>famous Fried Rice</p>
								<h5> &#8377;70.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Fried Rice">
						<input type="hidden" name="Price" value="70">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/chhole bhature.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Chhole Bhature</h4>
								<p>Special Chhole Bhature</p>
								<h5> &#8377;55.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Chhole Bhature">
						<input type="hidden" name="Price" value="55">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/Chicken thali.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Chicken Thali</h4>
								<p>Maharashtrian Chicken Thali.</p>
								<h5> &#8377;100.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Chicken Thali">
						<input type="hidden" name="Price" value="110">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch">
						<div class="gallery-single fix">
							<img src="images/chapati bhaji.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Chapati Bhaji</h4>
								<p>Famous Chapati bhaji</p>
								<h5> &#8377;40.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Chapati Bhaji">
						<input type="hidden" name="Price" value="40">
					</div>
				</form>

				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/Mattan Thali.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Mutton thali</h4>
								<p>Spicy Mutton Thali</p>
								<h5> &#8377;150.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Mutton thali">
						<input type="hidden" name="Price" value="150">
					</div>
				</form>
				<form action="manageCart.php"method="post">
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/Anda Bhurji.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Anda Bhurji</h4>
								<p>Spicy Anda bhurji</p>
								<h5> &#8377;60.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Anda Bhurji">
						<input type="hidden" name="Price" value="60">
					</div>
				</form>

				<form action="manageCart.php"method="post" >
					<div class="col-lg-4 col-md-6 special-grid lunch all">
						<div class="gallery-single fix">
							<img src="images/Misal Pav.jpg" class="img-fluid" style="height: 235px; width: 350px;"
								alt="Image">
							<div class="why-text">
								<h4>Misal Pav</h4>
								<p>Pune Misal Pav</p>
								<h5> &#8377;50.00</h5>
							</div>
						</div>
						<div class="btnbox">
							<button class="addtocartbtn"name = "Add_to_cart" type="submit">Add to cart</button>
						</div>
						<input type="hidden"name="Item_Name" value="Misal Pav">
						<input type="hidden" name="Price" value="50">
					</div>
				</form>
				
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
            document.getElementById("#allbtn").click();
        });
	</script>

	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>DYP Provides the best services in domain of foods but it is going on the next level now you can explore our college canteen online you can book your table in advance and you can also order your food from classrooms so both students and teachers can save their time and can focus more on studies.</p>
				</div>
				<div class="col-lg-3 col-md-6">
				<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>10am-6pm</p>
					<p><span class="text-color">Tue-Wed :</span> 10am-6pm</p>
					<p><span class="text-color">Thu-Fri :</span> 10am-6pm</p>
					<p><span class="text-color">Sat-Sun :</span> Closed</p>
				</div>
				
			</div>
		</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="#">DYP Canteen </a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>