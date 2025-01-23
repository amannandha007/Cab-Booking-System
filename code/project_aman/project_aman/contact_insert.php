    <?php
    include("connection/connection.php");

    //extract($_POST);
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        $qry = "insert into contact_us(name,email,phone,message) values('" . $name . "','" . $email . "','" . $phone . "','" . $message . "')";
        mysqli_query($conn, $qry) or exit("contact insert fail" . mysqli_error($conn));
        $_SESSION['error'] = "contact added successfully";
        header("location:contact.php");
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);
    }


    ?>