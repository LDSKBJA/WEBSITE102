<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="bodyground: #fff;">
    <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name'];?></span></h1>
        <p>This is an <span>user</span> page</p>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>