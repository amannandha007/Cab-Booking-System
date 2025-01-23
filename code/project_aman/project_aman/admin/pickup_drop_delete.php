<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    $id = $_REQUEST["id"];

    $qry = "delete from pickup_drop where id=$id";

    mysqli_query($conn, $qry) or exit("delete fail" . mysqli_error($conn));

    $_SESSION['err'] = "slider deleted successfully";
    header("location:pickup_drop.php");

} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>