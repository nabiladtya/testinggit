<?php
include 'function.php';


if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];


    //ambil usernmae dari id

    $sql = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
    $fetch = mysqli_fetch_assoc($sql);


    if ($key === hash('sha256', $fetch['username'])) {
        $_SESSION['login'] = true;
        header('Location: index.php');
    }
}


if (isset($_POST['submit'])) {
    login($_POST);
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
    <h1>Login</h1>

    <form action="" method="post">

        <label for="">Username</label>
        <input type="text" name="username"><br>
       
        <label for="">Password</label>
        <input type="password" name="password"><br>

        <label for="">Remember Me</label>
        <input type="checkbox" name="remember" id=""><br>

        <input type="submit" name="submit">

    </form>



</body>

</html>