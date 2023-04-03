<?php
   session_start();
    require_once 'includes/header.php';
    require_once 'includes/navbr.php';
    require_once 'includes/db.php';
    $email_from_session = $_SESSION['email_address_from_login'];
    $name ="SELECT name FROM users where email = '$email_from_session' ";
    

?>

<h2>welcome, to your Dahboard</h2>
<h4>Name:<?= mysqli_fetch_assoc(mysqli_query($db_connect,$name))['name'] ?></h4>
<h3>Email: <?= $email_from_session?></h3>





<?php
    require_once 'includes/footer.php'
?>