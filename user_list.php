<?php
require_once 'includes/header.php';
require_once 'includes/navbr.php';

//dataaseconection
define("HostName", "localhost");
define("UserName", "root");
define("Password", "");
define("DatabaseName", "portfolio_php");
$db_connect = mysqli_connect(HostName, UserName, Password, DatabaseName);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: ";
}
 $select_query = "SELECT id, name,email, gender From users ";
    $data_from_db = mysqli_query ($db_connect , $select_query);
 ?>
<div class="row mt-4">
    <div class="col-lg-10 m-auto">
        <div class="card border-light mb-3">
            <div class="card-header bg-success border-primary">User_list</div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">gender</th>
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