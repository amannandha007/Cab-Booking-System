<?php
include_once("../connection/connection.php");
$id = $_GET['id'];
$status = $_GET['status'];

$update_q = "UPDATE subcategories SET status='$status' Where id='$id'";
mysqli_query($conn, $update_q);
header("location:aboutus.php");
?>