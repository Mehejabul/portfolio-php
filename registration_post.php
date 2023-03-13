<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

if($password == $confirm_password){
    //code 
   $db_connect = mysqli_connect('localhost','root','','portfolio_php');
  
   $insert_query = " Insert Into users (name,email,password,gender) values ('$name','$email','$password','$gender')";
         mysqli_query($db_connect,$insert_query); 
         header('location: login.php');
}else{
    echo 'mile nai';
}
?>