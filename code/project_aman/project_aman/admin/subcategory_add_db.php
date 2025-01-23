<?php
session_start();
if(isset($_SESSION['uname']))
{
    include_once("./connection/connection.php");
    extract($_POST);

    $filename=time()."_".$_FILES['image']['name'];
    $path="images/subcategories/".$filename;
    $subcatdescription = mysqli_real_escape_string($conn,$subcatdescription);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
    {
        $qry="insert into subcategories(catid,subcname,subcatdescription,price,image) values('".$catid."','".$subcname."','".$subcatdescription."','".$price."','".$filename."')";
        // echo $qry;exit;
        mysqli_query($conn,$qry) or exit("Sub category insert fail".mysqli_error($conn));
        $_SESSION['add1']="Sub Category Added Successfully"; 
        header("location:subcategory.php");
    }
    else
    {
    $_SESSION['add1']="File Upload Fail";
        header("location:subcategory_add.php");
    }
}
else{
    $_SESSION['error']="your are not authorize to access this page without login";
    header("location:index.php");
}
?>
