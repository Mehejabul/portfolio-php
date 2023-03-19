<?php
session_start();

require_once "includes/db.php";

    $id = $_GET['id'];
    $user_delete = "DELETE FROM users Where id=$id";
    $user_query = mysqli_query($db_connect,$user_delete);

    if($user_query){
        $_SESSION['status'] = 'delete user successfully';
        header("location:user_list.php");
    }else{
        echo "no";
    }

?>