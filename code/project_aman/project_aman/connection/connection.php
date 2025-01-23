<?php
$hostname = 'localhost';
$username = 'root';
$password = "";
$db = "project_cab";
$conn = mysqli_connect($hostname,$username,$password,$db) or exit("conection failed");
if(!$conn){
    echo "connection fail";
}
?>