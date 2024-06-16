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
    
    $email ="";
    $password = "";
    $confirm = "";

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Date = $_POST['date'];
        $Time = $_POST['time'];
        $TableNo = $_POST['TableNo'];
    
        $q1 = " select * from tables where Id = '$TableNo' ";
        $q2 = "INSERT INTO `tables`(`Name`, `Email`, `Date`, `Time`,`Id`) VALUES ('$Name','$Email','$Date','$Time','$TableNo');";
        $result = mysqli_query($con,$q1);
        $num = mysqli_num_rows($result);
        if($num == 1){
            echo '<script>alert("Sorry:( Table is already reserved!!!")</script>';
        }else{
            $result = mysqli_query($con,$q2);
            echo '<script>
            alert("Thank you your Table is reserved Now!!!");
            window.location.href="reservation.php";
            </script>';
        }
        
    }
    else{
        echo 'not working ';
    }
?>