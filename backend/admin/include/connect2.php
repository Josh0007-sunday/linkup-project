<?php
// creating connection to database.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'linkup';
// creating connection with defined values
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );
if(mysqli_connect_error()){
    // if there is error with this connection, 
    exit('failed to connect to MYSQL:'.mysqli_connect_error());
}
?>