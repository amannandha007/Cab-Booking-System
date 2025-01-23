<?php
    include("connection/connection.php");

    //extract($_POST);
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $car= $_POST["car"];
        $pickup_location= $_POST["pickup_location"];
        $drop_location= $_POST["drop_location"];
        $pickup_date= $_POST["pickup_date"];
        $return_date= $_POST["return_date"];


        $qry = "insert into pickup_drop(name,email,phone,car,pickup_location,drop_location,pickup_date,return_date) values('" . $name . "','" . $email . "','" . $phone . "','" . $car . "','" . $pickup_location . "','" . $drop_location . "','" . $pickup_date . "','" . $return_date . "')";
        mysqli_query($conn, $qry) or exit("contact insert fail" . mysqli_error($conn));
        header("location:payment.php");
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);
    }


    ?>