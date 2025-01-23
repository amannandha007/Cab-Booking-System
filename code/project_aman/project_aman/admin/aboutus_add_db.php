<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    //extract($_POST);
    $atitle = $_POST['atitle'];
    $adescription = $_POST['adescription'];

    $filename = time() . "_" . $_FILES['image']['name'];
    $path = "images/about/" . $filename;
    $adescription = mysqli_real_escape_string($conn, $adescription);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $qry = "insert into about_us(about_title,image,about_description) values('" . $atitle . "','" . $filename . "','" . $adescription . "')";
        mysqli_query($conn, $qry) or exit("about insert fail" . mysqli_error($conn));
        $_SESSION['error'] = "about us added successfully";
        header("location:aboutus.php");
    } else {
        $_SESSION['error'] = "file upload fail";
        header("location:aboutus.php");
    }
} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>