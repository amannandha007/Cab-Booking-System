<?php
$servername = "localhost"; // Change if your database server is different
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "project_cab"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $paymentMethod = htmlspecialchars($_POST['payment_method']);
    
    if ($paymentMethod === 'credit_card') {
        $nameOnCard = htmlspecialchars($_POST['name_on_card']);
        $cardNumber = htmlspecialchars($_POST['card_number']);
        $expMonth = htmlspecialchars($_POST['exp_month']);
        $expYear = htmlspecialchars($_POST['exp_year']);
        $cvv = htmlspecialchars($_POST['cvv']);
        
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO payment (payment_method, name_on_card, card_number, exp_month, exp_year, cvv) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $paymentMethod, $nameOnCard, $cardNumber, $expMonth, $expYear, $cvv);
    } elseif ($paymentMethod === 'paypal') {
        $paypalEmail = htmlspecialchars($_POST['paypal_email']);
        
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO payment (payment_method, paypal_email) VALUES (?, ?)");
        $stmt->bind_param("ss", $paymentMethod, $paypalEmail);
    } elseif ($paymentMethod === 'bank_transfer') {
        $accountNumber = htmlspecialchars($_POST['account_number']);
        $bankName = htmlspecialchars($_POST['bank_name']);
        
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO payment (payment_method, account_number, bank_name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $paymentMethod, $accountNumber, $bankName);
    }

    // Execute the statement
    if ($stmt->execute()) {
        echo "Payment details saved successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
