<?php
$serverName = 'localhost';
$user = 'root';
$password = '';
$dbName = 'crud';

$con = mysqli_connect($serverName, $user, $password, $dbName);

if(!$con){
    die('Connection failed.........'.mysqli_connect_error());
}

?>