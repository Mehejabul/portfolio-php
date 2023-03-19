<?php
        require_once 'includes/db.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

     $update_query = "UPDATE users SET name ='$name', email = '$email', gender ='$gender' WHERE id = $id ";
          mysqli_query($db_connect,$update_query); 
          header('location: user_list.php');

?>
