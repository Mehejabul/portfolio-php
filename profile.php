<?php
session_start();
   require_once 'includes/db.php';
   require_once 'includes/header.php';
   require_once 'includes/navbr.php';

   $email_address_from_login = $_SESSION['email_address_from_login'];
   $select_profile_query = "Select profile_image from users  where email = '$email_address_from_login' ";
?>

<div class="row mt-4">
   <div class="col-lg-6">
      <div class="card border-light mb-3">
         <div class="card-header bg-secondary border-primary">Change Password</div>
         <div class="card-body">

            <form method="POST" action="profile_post.php">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Old Password</label>
                  <input type="password" class="form-control" name="old_password">
               </div>

               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">New Password</label>
                  <input type="password" class="form-control" name="new_password">
               </div>

               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password">
               </div>

               <button type="submit" class="btn btn-success">Change Your password</button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="card border-light mb-3">
         <div class="card-header bg-secondary border-primary">Change Profile picture</div>
         <div class="card-body">
            <div class="text-center">
               <img src="./images/profile_image/<?=mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_query))['profile_image']?>" width="100">
            </div>
            <form method="POST" action="profile_image_post.php" enctype="multipart/form-data">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Change Profile</label>
                  <input type="file" class="form-control" name="new_profile_image">
               </div>
               <button type="submit" class="btn btn-success">Change profile picture</button>
            </form>
         </div>
      </div>
   </div>
</div>

<?php
   require_once 'includes/footer.php';
?>