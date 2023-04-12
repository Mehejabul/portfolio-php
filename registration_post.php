<?php
require_once 'includes/db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];



    $curl = curl_init();
    curl_setopt_array($curl,[
    CURLOPT_RETURNTRANSFER => 1,
     CURLOPT_URL =>"https://www.google.com/recaptcha/api/siteverify",
     CURLOPT_POST => 1,
     CURLOPT_POSTFIELDS => [
         'secret' => '6LcQvV4lAAAAAEUvZx15GAtXUkGLNJaLh-uyTYFu',
         'response' => $_POST['g-recaptcha-response'],
     ],
     ]);

     $response = json_decode(curl_exec($curl)) ;

     if(!$response->success){
        echo 'login not possible please fill up the captcha';

     }else{
         if($password == $confirm_password){
     $enctype_password = md5($password);
     if(isset($_POST['submit'])){
     $insert_query = " Insert Into users (name,email,password,gender) values ('$name','$email','$enctype_password','$gender')";
          mysqli_query($db_connect,$insert_query); 
           header('location: user_list.php');
         unset($_POST['submit']);

     }
  }else{
      echo 'mile nai';

  }
     }


  ?>