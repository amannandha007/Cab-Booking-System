<?php
// Include the database connection
include_once("./connection/connection.php");
session_start();

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Print the contents of the $_POST array for debugging
   

    // Check if all required fields are set
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        // Retrieve form data
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = md5(trim($_POST['password'])); // Hashing the password

        // Prepare the SQL query
        $sql = "INSERT INTO register (username, email, password) VALUES (?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sss", $username, $email, $password);

            // Execute the query
            if ($stmt->execute()) {
                $_SESSION['email'] = $email;                
                header("location:login.php");
                
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: Could not prepare the SQL statement.";
        }

        $conn->close();
    } else {
        echo "Error: One or more fields are missing!";
    }
} else {
    echo "Error: Invalid request method!";
}
?>
