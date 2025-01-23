<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    $id = $_REQUEST["id"];
    $getimg = "SELECT * FROM about_us WHERE id='$id' ";
    $imgr = mysqli_query($conn, $getimg);
    $data = mysqli_fetch_array($imgr);
    $path = "images/about/" . $data['image'];
    unlink($path);

    $qry = "delete from about_us where id=$id";

    mysqli_query($conn, $qry) or exit("delete fail" . mysqli_error($conn));

    $_SESSION['err'] = "about us deleted successfully";
    header("location:aboutus.php");

} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>