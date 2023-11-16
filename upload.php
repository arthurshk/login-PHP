<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Menu</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
<p>This is the upload menu. Only registered users can access this page.</p>
</body>
</html>
