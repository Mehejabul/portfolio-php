<?php
session_start();
   require_once 'includes/header.php';
   require_once 'includes/navbr.php';
?>

<div class="row mt-4">
   <div class="col-lg-6 m-auto">
      <div class="card border-light mb-3">
         <div class="card-header bg-success border-primary">login</div>
         <div class="card-body">

            <form method="POST" action ="login_post.php">
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name= "email">
                  
                       <?php
                if(isset($_SESSION['email_password_error'])){
                ?>
               <small class=text-danger>
                <?php
                    echo $_SESSION['email_password_error'];
                    unset($_SESSION['email_password_error']);
                ?>
                <?php } ?>
               </small>
            </div>

               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
               </div>

               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>

<?php
   require_once 'includes/footer.php';
?>