


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Navbar
     </a>
 <button class="navbar-toggler bg bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
 </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
         <?php
        if(!isset( $_SESSION['login_ststus'] )){
        ?>
        <a class="nav-link" href="login.php">login</a>

        <?php } ?>
        <a class="nav-link" href="registration.php">regestation</a>
        <a class="nav-link" href="user_list.php">User list</a>

        <?php
        if(isset( $_SESSION['login_ststus'] )){
        ?>
         <a class="nav-link" href="profile.php">Profile</a>
        <a class="nav-link btn btn-sm btn-danger text-white" href="logout.php">logout</a>

        <?php } ?>
      </div>
    </div>
  </div>
</nav>