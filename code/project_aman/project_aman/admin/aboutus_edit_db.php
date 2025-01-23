<?php
session_start();
if (isset($_SESSION['uname'])) {
    include_once("../connection/connection.php");
    //extract($_POST);
    $id = $_POST['id'];
    $atitle = $_POST['atitle'];
    $adescription = $_POST['adescription'];
    $adescription = mysqli_real_escape_string($conn, $adescription);
    if ($_FILES['image']['error'] == 0) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "images/about/" . $filename;
        $oldpic = $_POST['oldimages'];
        $oldpath = "images/about/" . $oldpic;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "update about_us set about_title='" . $atitle . "',image='" . $filename . "',about_description='" . $adescription . "'where id=$id";
            mysqli_query($conn, $qry) or exit("about us insert fail" . mysqli_error($conn));
            if ($qry) {
                unlink($oldpath);
            }
            $_SESSION['er'] = "aboutus Update successfully";
            header("location:aboutus.php");
        } else {
            $_SESSION['error'] = "file update fail";
            header("location:aboutus_add.php");
        }
    } else {
        $qry = "update about_us set about_title='" . $atitle . "',about_description='" . $adescription . "'where id=$id";
        mysqli_query($conn, $qry) or exit("about update fail" . mysqli_error($conn));
        $_SESSION['error'] = "about us update successfully";
        header("location:aboutus.php");
    }

} else {
    $_SESSION['error'] = "your are not authorize to access this page without login";
    header("location:index.php");
}
?>