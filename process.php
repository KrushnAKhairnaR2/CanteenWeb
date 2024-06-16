<?php

   if(isset($_POST['btn-send'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $textmsg = $_POST['textmsg'];

    if(empty($username) || empty($email) ||empty($subject) || empty($textmsg) ){
        header('location:contact_login.php?error');
    }else{
        $to = "princemahato1211@gmail.com";
        // if(mail($to,$subject,$textmsg,$email)){
        //     header('location:contact_login.php?success');
        // }
        echo"<script>
                    alert('Message Sent Successfully!!!');
                    window.location.href='contact_login.php';
                    </script>";
        
    }
   }
   else{
    header("location:contact_login.php");
   }
?>