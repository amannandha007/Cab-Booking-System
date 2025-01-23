<?php
session_start();
include_once("./connection/connection.php");
extract($_POST);
$qry = "select * from register where email='".$email."' && password='".md5($password)."'";
$res = mysqli_query($conn,$qry) or exit("select user fail".mysqli_error($conn));
$count = mysqli_num_rows($res);
if($count>0){
    $_SESSION['email']=$email;
    header("location:master.php");
}else{
    $_SESSION['error']="your <b>Email</b> and <b>Password</b> is incorrect";
    header("location:index.php");
}
?>