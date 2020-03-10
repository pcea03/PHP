<?php

// Connection variables 
$host = "172.17.0.3"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "root"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "CRUD"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>