<?php
include_once("../connection/connection.php");
$id = $_GET['id'];
$status = $_GET['status'];

$update_q = "UPDATE pickup_drop SET status='$status' Where id='$id'";
mysqli_query($conn, $update_q);
header("location:pickup_drop.php");
?>