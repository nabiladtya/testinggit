<?php
session_start();

include 'function.php';


if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

if (isset($_POST['logout'])) {
    logout();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halo </h1>
    <form action="" method="post">
    <button type="submit" name="logout">Logout</button>
    </form>
</body>

</html>