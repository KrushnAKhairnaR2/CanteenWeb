<?php
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
    $id = $_POST['delete'];
    $q = "DELETE FROM `tables` WHERE Id= $id";
    mysqli_query($con,$q);
    header("location: tables.php");
?>