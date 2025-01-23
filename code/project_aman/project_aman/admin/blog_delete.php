<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    $id = $_REQUEST["id"];
    $getimg = "SELECT * FROM blog WHERE id='$id' ";
    $imgr = mysqli_query($conn, $getimg);
    $data = mysqli_fetch_array($imgr);
    $path = "images/blog/" . $data['image'];
    unlink($path);

    $qry = "delete from blog where id=$id";

    mysqli_query($conn, $qry) or exit("delete fail" . mysqli_error($conn));

    $_SESSION['err'] = "blog deleted successfully";
    header("location:blog.php");

} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>