<?php

include 'function.php';

if (isset($_POST['submit'])) {
    register($_POST);
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
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">Password</label>
        <input type="password" name="password"><br>
        <label for="">Password 2</label>
        <input type="password" name="password2"><br>
        <input type="submit" name="submit">

    </form>



</body>

</html>