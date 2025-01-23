
<?php
session_start();
if(isset($_SESSION['uname']))
{
    include_once("../connection/connection.php");
    $id = $_REQUEST["id"];
    $getimg = "SELECT * FROM categories WHERE id='$id' ";
    $imgr = mysqli_query($con, $getimg);
    $data = mysqli_fetch_array($imgr);
    $path = "images/categories/" . $data['images'];
    unlink($path);
    $qry = "delete from categories where id=$id";
    mysqli_query($con, $qry) or exit("delete fail" . mysqli_error($con));
    $_SESSION['err'] = "category deleted successfully";
    header("location:category.php");
    
    
}
else{
    $_SESSION['error']="your are not authorize to access this page without login";
    header("location:index.php");
}

?>
