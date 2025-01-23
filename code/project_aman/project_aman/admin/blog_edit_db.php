<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    //extract($_POST);
    $id = $_POST['id'];
    $date=$_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $description = mysqli_real_escape_string($conn, $description);
    if ($_FILES['image']['error'] == 0) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "images/blog/" . $filename;
        $oldpic = $_POST['oldimages'];
        $oldpath = "images/blog/" . $oldpic;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "update blog set date='" . $date . "',title='" . $title . "',image='" . $filename . "',description='" . $description . "'where id=$id";
            mysqli_query($conn, $qry) or exit("about insert fail" . mysqli_error($conn));
            if ($qry) {
                unlink($oldpath);
            }
            $_SESSION['er'] = "blog Update successfully";
            header("location:blog.php");
        } else {
            $_SESSION['error'] = "file update fail";
            header("location:blog_add.php");
        }
    } else {
        $qry = "update blog set date='" . $date . "',title='" . $title . "',description='" . $description . "'where id=$id";
        mysqli_query($conn, $qry) or exit("about update fail" . mysqli_error($conn));
        $_SESSION['error'] = "blog update successfully";
        header("location:blog.php");
    }

} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>