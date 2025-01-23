<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    //extract($_POST);
    $date=$_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $filename = time() . "_" . $_FILES['image']['name'];
    $path = "images/blog/" . $filename;
    $adescription = mysqli_real_escape_string($conn, $adescription);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $qry = "insert into blog(date,title,image,description) values('" . $date . "','" . $title . "','" . $filename . "','" . $description . "')";
        mysqli_query($conn, $qry) or exit("about insert fail" . mysqli_error($conn));
        $_SESSION['error'] = "blog added successfully";
        header("location:blog.php");
    } else {
        $_SESSION['error'] = "file upload fail";
        header("location:blog.php");
    }
} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>