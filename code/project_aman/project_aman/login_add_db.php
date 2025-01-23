<?php
session_start();
include_once('include/config.php');
if ($conn) {
    extract($_POST);
    $qry = mysqli_query($conn,"insert into register values(NULL,'" . $username . "','" .md5($password) . "','".$phone."','" . $email . "');");
    if ($qry) {
        header("location:dashboard.php");
    } else {
        echo"error";
    }
} else {
    echo "error";
}
?>