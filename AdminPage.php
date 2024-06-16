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
    <title>Canteen</title>
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
            <li class="nav-item"><a class="nav-link" href="tables.php">Table Bookings</a></li>
						<li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <div class="minheight">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center border rounded"  style="background-color: #d0a772; margin:125px 0px 0px 0px">
            <h1 class="Mycart">Dashboard</h1>
          </div>
          <div class="col-lg-12">
            <table class="table text-center table-dark text-light">
              <thead>
                <tr>
                  <th scope="col">Order Id</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Phone No</th>
                  <th scope="col">Address</th>
                  <th scope="col">Payment Mode</th>
                  <th scope="col">Orders</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $q1 = "SELECT * FROM `order_manager` WHERE 1";
                  $user_result = mysqli_query($con,$q1);
                  while($user_fetch = mysqli_fetch_assoc($user_result)){
                     echo"
                     <tr>
                        <th>$user_fetch[Order_id]</th>
                        <td>$user_fetch[Full_name]</td>
                        <td>$user_fetch[Phone_No]</td>
                        <td>$user_fetch[Address]</td>
                        <td>$user_fetch[Pay_Mode]</td>
                        <td>
                            <table class='table text-center text-dark'>
                            <thead>
                              <tr>
                                <th scope='col'>Item Name</th>
                                <th scope='col'>Price</th>
                                <th scope='col'>Quantity</th>
                              </tr>
                            </thead>
                            <tbody>
                            ";
                            $order_query = "SELECT * FROM `user_orders` WHERE `Order_id` = '$user_fetch[Order_id]'";
                            $order_result = mysqli_query($con,$order_query);
                            while($order_fetch = mysqli_fetch_assoc($order_result)){
                              echo"
                                <tr>
                                  <td>$order_fetch[Item_Name]</td>
                                  <td>$order_fetch[Price]</td>
                                  <td>$order_fetch[Quantity]</td>
                                </tr>
                              ";
                            }
                            echo "
                              </tbody>
                            </table> 
                        </td>
                      </tr>
                     ";
                  }
                ?>    
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/js/main.js">
  </script>
</body>
</html>