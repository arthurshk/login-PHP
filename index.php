<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: upload.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'functions.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        $_SESSION['user'] = $username;
        header("Location: upload.php");
        exit();
    } else {
        echo "Invalid login credentials. Please try again.";
    }
}
?>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

</body>
</html>