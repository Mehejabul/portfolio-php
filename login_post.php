<?php
  session_start();
require_once 'includes/db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

     $count_query = "Select count(*) As total From users where email = '$email' And password = '$password' ";
    $from_db = mysqli_query($db_connect,$count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);

    if($after_assoc['total'] == 1) {
        echo "welcome";
    }else{
   echo 'mile mai';
      $_SESSION['email_password_error'] = "Your email or password is error";
      header("location:login.php");

    }
?>