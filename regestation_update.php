<?php
       session_start();
        require_once 'includes/db.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $old_name = $_POST['name_old'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

     $update_query = "UPDATE users SET name ='$name', email = '$email', gender ='$gender' WHERE id = $id ";
          mysqli_query($db_connect,$update_query); 
           $_SESSION['success_message'] = "$old_name edited succesffuly to $name";
         header('location: user_list.php');

?>
