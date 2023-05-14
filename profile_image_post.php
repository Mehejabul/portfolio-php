<?php

session_start();
require_once 'includes/db.php';
// image upload start
$image_name = $_FILES['new_profile_image']['name'];
$temp_location = $_FILES['new_profile_image']['tmp_name'];
$new_location = "images/profile_image/".$image_name;
move_uploaded_file($temp_location , $new_location);
// Image upload end


//Database image upload start
$email_address = $_SESSION['email_address_from_login'];
$update_query = " Update users set profile_image = '$image_name' where email= '$email_address' ";
mysqli_query($db_connect, $update_query);
header('location: profile.php');


//Database image upload end
?>