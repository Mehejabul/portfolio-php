<?php
session_start();
require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/navbr.php';
 $select_query = "SELECT id, name,email, gender From users ";
    $data_from_db = mysqli_query ($db_connect , $select_query);
 ?>
<div class="row mt-4">
    <div class="col-lg-10 m-auto">
        <div class="card border-light mb-3">
            <div class="card-header bg-success border-primary">User_list</div>
            <div class="card-body">
                <div class="alert alert-success">
                       Total User: <?=$data_from_db->num_rows?>
                </div>
                <?php
                if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-danger">
                <?php
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                ?>
                </div>
                <?php } ?>
            <?php
                if(isset($_SESSION['success_message'])){
                ?>
                <div class="alert alert-success">
                <?php
                    echo $_SESSION['success_message'];
                    unset($_SESSION['success_message']);
                ?>
                </div>
            <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">gender</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $serial = 1;
                           foreach($data_from_db as $user_value){
                        ?>

                        <tr>
                            <td><?=$serial++?></td>
                            <td><?=$user_value['id']?></td>
                            <td><?=$user_value['name']?></td>
                            <td><?=$user_value['email']?></td>
                            <td><?=$user_value['gender']?></td>
                            <td>
                                <a href="edit_user.php?id=<?=$user_value['id']?>", class="btn btn-outline-info">EDit</a>
                                <a href="delete_user.php?id=<?=$user_value['id']?>", class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div> 
<?php
require_once 'includes/footer.php';
?>