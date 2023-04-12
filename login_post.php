<?php
  session_start();
   if(isset($_SESSION['login_ststus'])){
       header("location: dashboard.php");     
   }
require_once 'includes/db.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

     $count_query = "Select count(*) As total From users where email = '$email' And password = '$password' ";
    $from_db = mysqli_query($db_connect,$count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);

    if($after_assoc['total'] == 1) {
      $_SESSION['login_ststus'] = "yes" ;
      $_SESSION['email_address_from_login'] = $email ;
      header("location: dashboard.php");
    }else{
   echo 'mile mai';
      $_SESSION['email_password_error'] = "Your email or password is error";
      header("location: login.php");

    }
?>