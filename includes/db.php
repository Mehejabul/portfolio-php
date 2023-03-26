<?php

//databaseconection
define("HostName", 'localhost');
define("UserName", 'root');
define("Password", '');
define("DatabaseName", 'portfolio_php');
$db_connect = mysqli_connect(HostName, UserName, Password, DatabaseName);

// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: ";
// }

?>