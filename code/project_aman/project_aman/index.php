<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/login_style.css">
</head>
<body>

<form action="register_logic.php" method="POST">
        <!-- Username field -->
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Username" required><br><br>

        <!-- Email field -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" required><br><br>

        <!-- Password field -->
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" required><br><br>

        <!-- Submit button -->
        <button type="submit">Register</button>
    </form>

    <p style="text-align:center" >Already have an account? <a href="login.php">Login</a></p>

</body>
</html>

<?php
  include_once('include/script.php');
?>
</body>
</html>
