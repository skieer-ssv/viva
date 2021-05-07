<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'P0lt0000');
define('DB_NAME', 'viva_ques');

/* Attempt to connect to MySQL database */
$con= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    
    
    
}
?>