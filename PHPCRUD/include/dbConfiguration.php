<?php

define('DB_SERVER', '172.17.0.2');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'CRUD');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn == false){
    die("ERROR: Could not connect.". mysqli_connect_error());
}
?>