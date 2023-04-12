<?php
session_start();
unset($_SESSION['login_ststus']);
unset($_SESSION['email_address_from_login'] );
header("location: login.php");

?>