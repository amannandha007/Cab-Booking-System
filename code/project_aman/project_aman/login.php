<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login_style.css">

</head>
<body>

    <form action="login_c.php" method="POST">
        <h2>Login</h2>
        <div class="error" id="login-error"></div>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p style="text-align:center" >Don't have an account? <a href="index.php">Register</a></p>

</body>
</html>

