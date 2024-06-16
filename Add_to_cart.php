<?php
  session_start();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DYP Canteen - My Cart</title>  
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
      <a class="navbar-brand logoDYP" href="#"><img src="./images/favicon.png" style="width: 80px;height: 80px;border-radius: 50px;" alt=""/></a>
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
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<?php
							$count=0;
							if(isset($_SESSION['cart'])){
								$count=count($_SESSION['cart']);
							}
						?>
						<li class="nav-item active"><a class="nav-link" href="Add_to_cart.php">CART(<?php echo $count; ?>)</a></li>
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
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12 text-center border rounded"  style="background-color: #d0a772;  margin:125px 0px 0px 0px ">
            <h1 class="Mycart">MY CART</h1>
          </div>
    
          <div class="col-lg-9">
            <table class="table">
              <thead class="text-center">
                <tr>
                  <th scope="col" class="column_name">Serial No.</th>
                  <th scope="col" class="column_name">Item Name</th>
                  <th scope="col" class="column_name">Item Price</th>
                  <th scope="col" class="column_name">Quantity</th>
                  <th scope="col" class="column_name">Total</th>
                  <th scope="col"></th>
                </tr>
              </thead>
			  <tbody class="text-center">
            <?php
              $total=0;
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $key=>$value)
                {
                  $total= $total+$value['price'];
                  $sr=$key+1;
                  echo"
                    <tr>
                      <td>$sr</td>
                      <td>$value[Item_Name]</td>
                      <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                      <td><input class='text-center iquantity' onchange='subTotal()' onchange='grandTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
                      <td class='itotal'></td>
                      <td>
                        <form action='manageCart.php' method='POST'>
                          <button  name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                    </tr>
                  ";
                }
              } 
            ?>
          </tbody>
            </table>
          </div>
          
          <div class="col-lg-3">
            <div class="paymentbox">
              <h4 class="gtotal">Grand Total:</h4>
              <h5 class="text-right" style="color:red; font-size: 25px;" id='grand_total'></h5>
              <?php
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
              ?>
                  <form action="payment.php" method="POST">
                    <div class="form-group">
                      <label >Name</label>
                      <input type="text" name="fullName" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label >Phone Number</label>
                      <input type="number" name="phoneNo" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label >Address</label>
                      <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="paymode" value="COD" id="flexRadioDefault" checked>
                      <label for="flexRadioDefault" class="form-check-label">Cash On Delivery</label>
                    </div>
                    <button class="btn btn-primary btn-block" name="purchase">Make Payment</a> 
                  </form>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
	<script>
  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');

  function subTotal(){
    gt=0;
    for(i=0; i<iprice.length; i++)
    {
      itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    grand_total.innerText=gt;
  }
  subTotal();

</script>
  <br><br><br><br><br><br>  
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