<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if (!$con){
    die("connection failed:". mysqli_connect_error());
}
echo "connected successfully";

$sql =  "CREATE DATABASE hello ";
?>