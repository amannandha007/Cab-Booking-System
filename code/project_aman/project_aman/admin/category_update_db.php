<?php
session_start();
if(isset($_SESSION['uname']))
{
    include_once("../connection/connection.php");
    extract($_POST);
    $catdescription= mysqli_real_escape_string($conn,$catdescription);
    if($_FILES['image']['error']==0)
    {
        $filename=time()."_".$_FILES['image']['name'];
        $path="images/categories/".$filename;
    
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
        {
            $qry="update categories set cname='".$cname."',catdescription='".$catdescription."',image='".$filename."'where id=$id";
            mysqli_query($conn,$qry) or exit("category update fail".mysqli_error($conn));
            $_SESSION['er']="Category Update Successfully"; 
            header("location:category.php");
        }
        else
        {
        $_SESSION['upd']="File Update Fail";
            header("location:category_add.php");
        }
    }else{
        $qry="update categories set cname='".$cname."',catdescription='".$catdescription."'where id=$id";
        mysqli_query($conn,$qry) or exit("category update fail".mysqli_error($conn));
        $_SESSION['upd']="Category Update Successfully"; 
        header("location:category.php");
    }

}
else{ 
    $_SESSION['error']="your are not authorize to access this page without login";
    header("location:index.php");
}
?>
