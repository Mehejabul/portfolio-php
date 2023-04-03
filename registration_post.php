<?php
require_once 'includes/db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];

  if($password == $confirm_password){
     $enctype_password = md5($password);
    $insert_query = " Insert Into users (name,email,password,gender) values ('$name','$email','$enctype_password','$gender')";
          mysqli_query($db_connect,$insert_query); 
          header('location: user_list.php');
  }else{
      echo 'mile nai';
  }
?>