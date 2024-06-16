<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DYP Canteen - Reservation</title>  
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="apple-touch-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			<a class="navbar-brand logoDYP" href="#"><img src="./images/favicon.png" style="width: 80px;height: 80px;border-radius: 50px;" alt="" /></a>
				<div class="logo">Canteen</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="Index_login.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about_login.html">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact_login.php">Contact</a></li>
						<li class="nav-item active"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="Add_to_cart.php">CART</a></li>
						<li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Table Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation</h2>
						<p>Reserve your table now...</p>
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
					<form action="reserve.php" method="post"  >
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
									<select placeholder="Your Email" id="TableNo" class="form-control" name="TableNo" required data-error="Please select your required table number">
										<option value=1 >1</option>
										<option value=2 >2</option>
										<option value=3 >3</option>
										<option value=4 >4</option>
										<option value=5 >5</option>
										<option value=6 >6</option>
										<option value=7 >7</option>
										<option value=8 >8</option>
										<option value=9 >9</option>
										<option value=10 >10</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
										<div class="form-group">
											<select placeholder="Select Date" id="date" class="form-control" name="date" required data-error="Please select your required table number">
												<option value="Today" >Today</option>
												<option value="Tommorow" >Tommorow</option>
												<option value="Day After Tommorow" >Day After Tommorow</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select placeholder="Select Time" id="input_time" class="form-control" name="time" required data-error="Please select your required table number">
												<option value="10:00 AM" >10:00 AM</option>
												<option value="11:00 AM" >11:00 AM</option>
												<option value="12:00 PM" >12:00 PM</option>
												<option value="01:00 PM" >01:00 PM</option>
												<option value="02:00 PM" >02:00 PM</option>
												<option value="03:00 PM" >03:00 PM</option>
												<option value="04:00 PM" >04:00 PM</option>
												<option value="05:00 PM" >05:00 PM</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>                                 
								<div class="submit-button text-center">
									<button class="btn btn-common" name="submit" type="submit" style="padding:10px 65px;">Reserve</button>
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
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="#">Canteen Franchise</a></p>
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
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>