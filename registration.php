<?php
require_once 'includes/header.php';
require_once 'includes/navbr.php';
?> <div class="row mt-4">
  <div class="col-lg-6 m-auto">
    <div class="card border-light mb-3">
      <div class="card-header bg-success border-primary">Regestation</div>
      <div class="card-body">
        <form action="registration_post.php" method="post">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Please enter Full name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Please enter email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" Placeholder="please enter password">
          </div>
          <div class="mb-3">
            <label class="form-label"> Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="PLese enter confirm password">
          </div>
          <div class="mb-3">
            <label class="form-label"> Gender</label>
            <br>
            <input class="form-check-input" type="radio" name="gender" id="1" value="male">
            <label class="form-check-label" for="1"> Male</label>
            <br>
            <input class="form-check-input" type="radio" name="gender" id="2" value="female">
            <label class="form-check-label" for="2"> Female</label>
            <br>
            <input class="form-check-input" type="radio" name="gender" id="3" value="other">
            <label class="form-check-label" for="3"> other</label>
          </div>
          <button type="submit" class="btn btn-primary m-auto">Register</button>
        </form>
      </div>
    </div>
  </div>
</div> <?php
require_once 'includes/footer.php';
?>