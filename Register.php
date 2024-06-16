
<?php
    session_start();
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','canteen_db');
    define('DB_PORT',3306);
    /*Database Connection*/
    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);

    if($con===false){
        die("Error:Could not Connect ".mysqli_connect_error());
    }
    $email ="";
    $password = "";
    $confirm = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email=$_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $q = " select * from users where email = '$email' && password = '$password' ";
    
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    
    
    if($num == 1){
            echo '<script>alert("Account already exists please login")</script>';
        }
        else if($password == $confirm){
            $qy = " insert into users(email , password) values ('$email','$password') ";
            $key = $key+1;
            mysqli_query($con,$qy);
            header("location: login.php");
        }
        else{
            echo '<script>alert("Password and Confirm password doesn\'t match ")</script>';
        }
        session_abort();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./images/favicon.png">
    <title>DYP Canteen - Signup</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #d0a772;   /*#009970 */
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            border-radius:10px;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: whitesmoke;
            color: #d0a772;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #d0a772; /*#4CAF50 */
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: #fff;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="login-page">
            <div class="form">
                <h1>Sign Up</h1>
                <form action="register.php" method="post" class="login-form">
                    <input type="email" placeholder="email" name="email" required />
                    <input type="password" placeholder="password" name="password" required />
                    <input type="password" placeholder="confirm password" name="confirm_password" required />
                    <button type="submit">Sign up</button>
                    <p class="message">Already have an account? <a href="login.php">login</a></p>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>