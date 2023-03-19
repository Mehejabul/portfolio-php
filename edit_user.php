<?php
        require_once 'includes/db.php';
        require_once 'includes/header.php';
        require_once 'includes/navbr.php';

        $id = $_GET['id'];
        $edit_user = "SELECT  id, name, email, gender FROM users WHERE id = $id";
        $query = mysqli_query($db_connect,$edit_user);

        $assoc = mysqli_fetch_assoc($query);
?>

<div class="row mt-4">
    <div class="col-lg-6 m-auto">
        <div class="card border-light mb-3">
            <div class="card-header bg-success border-primary">Update User</div>
            <div class="card-body">
                <form action="regestation_update.php" method="Post">

                    <input type="hidden" class="form-control" name="id" placeholder="Please enter Full name"
                        value="<?=$assoc['id']?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please enter Full name"
                            value="<?=$assoc['name']?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please enter email"
                            value="<?=$assoc['email']?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Gender</label>
                        <br>
                        <input class="form-check-input" type="radio" name="gender" id="1" value="male" <?php
                           if($assoc['gender'] == "male"){
                             echo "checked";
                           }
                        ?>>
                        <label class="form-check-label" for="1"> Male</label>
                        <br>
                        <input class="form-check-input" type="radio" name="gender" id="2" value="female" <?php
                           if($assoc['gender'] == "female"){
                             echo "checked";
                           }
                        ?>>
                        <label class="form-check-label" for="2"> Female</label>
                        <br>
                        <input class="form-check-input" type="radio" name="gender" id="3" value="other" <?php
                           if($assoc['gender'] == "other"){
                             echo "checked";
                           }
                        ?>>
                        <label class="form-check-label" for="3"> other</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary"> update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'includes/footer.php'; 
?>