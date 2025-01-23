<?php
session_start();
if(isset($_SESSION['uname']))
{
    include_once("../connection/connection.php");
    extract($_POST);
    $subcatdescription= mysqli_real_escape_string($conn,$subcatdescription);
    if($_FILES['image']['error']==0)
    {
        $filename=time()."_".$_FILES['image']['name'];
        $path="images/subcategories/".$filename;
    
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
        {
            $qry="update subcategories set subcname='".$subcname."',subcatdescription='".$subcatdescription."',image='".$filename."',price='".$price."'where id=$id";
            mysqli_query($conn,$qry) or exit("sub category update fail".mysqli_error($conn));
            $_SESSION['upd1']="Sub Category Update Successfully"; 
            header("location:subcategory.php");
        }
        else
        {
        $_SESSION['upd1']="File Update Fail";
            header("location:subcategory_add.php");
        }
    }else{
        $qry="update subcategories set subcname='".$subcname."',subcatdescription='".$subcatdescription."',price='".$price."'where id=$id";
        mysqli_query($conn,$qry) or exit("sub category update fail".mysqli_error($conn));
        $_SESSION['upd1']="Sub Category Update Successfully"; 
        header("location:subcategory.php");
    }

}
else{ 
    $_SESSION['error']="your are not authorize to access this page without login";
    header("location:index.php");
}
?>
