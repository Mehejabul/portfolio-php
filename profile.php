<?php
session_start();
   require_once 'includes/header.php';
   require_once 'includes/navbr.php';
?>

<div class="row mt-4">
   <div class="col-lg-6 m-auto">
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
</div>

<?php
   require_once 'includes/footer.php';
?>