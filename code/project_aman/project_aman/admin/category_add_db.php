<?php
session_start();
if(isset($_SESSION['uname']))
{
    include_once("../connection/connection.php");
    extract($_POST);

    $filename=time()."_".$_FILES['image']['name'];
    $path="images/categories/".$filename;
    $catdescription= mysqli_real_escape_string($conn,$catdescription);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
    {
        $qry="insert into categories(cname,catdescription,image) values('".$cname."','".$catdescription."','".$filename."')";
        mysqli_query($conn,$qry) or exit("category insert fail".mysqli_error($conn));
        $_SESSION['add']="Category Added Successfully"; 
        header("location:category.php");
    }
    else
    {
    $_SESSION['add']="File Upload Fail";
        header("location:category_add.php");
    }
}
else{
    $_SESSION['error']="your are not authorize to access this page without login";
    header("location:index.php");
}
?>
