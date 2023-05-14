<?php
session_start();
require_once 'includes/db.php';
 
$email_address = $_SESSION['email_address_from_login'];
$encrypte_password =  md5($_POST['old_password']);
$query_check = "SELECT count(*) as total From users where email= '$email_address' and password ='$encrypte_password' ";

mysqli_fetch_assoc(mysqli_query($db_connect, $query_check));
if(mysqli_fetch_assoc(mysqli_query($db_connect, $query_check))['total'] == 1){
    if($_POST ['new_password'] == $_POST ['confirm_password'] ){
        $encrypte_new_password = md5($_POST ['new_password']);
         $update_password = "Update users set password =  '$encrypte_new_password' where email ='$email_address'";
         mysqli_query($db_connect , $update_password);
        header('location: profile.php');
     }else{
        echo "Confirm password  didnot matched with new password!";
    }
}else{
    echo "vul disen";
}
?>