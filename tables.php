<?php
  session_start();
  define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','canteen_db');
    define('DB_PORT',3307);
    /*Database Connection*/
    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);

    if($con===false){
        die("Error:Could not Connect ".mysqli_connect_error());
    }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DYP Canteen Franchise</title>  
    <link rel="shortcut icon" href="images/logo 2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    
    <header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo 2.png" alt="" />
				</a>
				<div class="logo">DYP Canteen </div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="AdminPage.php">Orders</a></li>
						<?php
							$count=0;
							if(isset($_SESSION['cart'])){
								$count=count($_SESSION['cart']);
							}
						?>
						<li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/js/main.js"></script>
    
    <div class="minheight">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center border rounded"  style="background-color: #d0a772;  margin:125px 0px 0px 0px ">
            <h1 class="Mycart">Table Bookings</h1>
          </div>
    
          <div class="col-lg-9">
            <table class="table">
              <thead class="text-center">
                <tr>
                  <th scope="col" class="column_name">Name</th>
                  <th scope="col" class="column_name">Email</th>
                  <th scope="col" class="column_name">Date</th>
                  <th scope="col" class="column_name">Time</th>
                  <th scope="col" class="column_name">Table Number</th>
                </tr>
              </thead>
			  <tbody class="text-center">
            <?php
            $q1 = "SELECT * FROM `tables`";
            $user_result = mysqli_query($con,$q1);
            while($user_fetch = mysqli_fetch_assoc($user_result)){
                echo "
                <tr>
                    <th>$user_fetch[Name]</th>
                    <td>$user_fetch[Email]</td>
                    <td>$user_fetch[Date]</td>
                    <td>$user_fetch[Time]</td>
                    <td>$user_fetch[Id]</td>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name='delete' value='$user_fetch[Id]'/>
                        <td scope='col'><button class='btn btn-danger'type ='submit'>Delete</button></td>
                    </form>
                </tr>
                    
                ";
            }    
            ?>
          </tbody>
            </table>
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

</body>
</html>