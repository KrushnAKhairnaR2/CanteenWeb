<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DYP Canteen - Contact us</title>  
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="Index_login.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about_login.html">About</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact_login.php">Contact</a></li>
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
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Enter Contact Details</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php
					$msg="";
					if(isset($_GET['error'])){
						$msg = "PLease fill up the blanks";
						echo'<div class="alert alert-danger">'.$msg.'</div>';
					}
					if(isset($_GET['success'])){
						$msg = "Your message has been sent...!";
						echo'<div class="alert alert-success">'.$msg.'</div>';
					}
					?>
					<form action="process.php" method="post"  >
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Subject" id="subject" class="form-control" name="subject" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" name="textmsg" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
								<button class="btn btn-common" name="btn-send" type="submit" style="padding:10px 65px;">Send</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
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
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Yamifood Restaurant'
				}
			]
		});	
	</script>
</body>
</html>