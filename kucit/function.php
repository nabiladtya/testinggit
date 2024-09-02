<?php

$koneksi = mysqli_connect("localhost", "root", "", "kucit");




function register($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data['username']));
    $email = strtolower($data['email']);
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $password2 = mysqli_real_escape_string($koneksi, $data['password2']);



    //get username
    $getusername = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    $fetch = mysqli_fetch_assoc($getusername);

    if (($fetch['username']) == $username) {
        echo "username sudah ada";
        return false;
    }


    // validasi konfirmasi password
    if ($password !== $password2) {
        echo "password sudah ada";
        return false;
    }


    $password = password_hash($password, PASSWORD_DEFAULT);

    //masuk  ke db
    mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$email', '$password')");
    mysqli_affected_rows($koneksi);

    echo "<script>alert('Okay')</script>";
}





function login($data)
{

    session_start();

    global $koneksi;

    $username = $data['username'];
    $password = $data['password'];

    // cari username
    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek) === 1) {
        $fetch = mysqli_fetch_assoc($cek);

        // Verify password
        if (password_verify($password, $fetch['password'])) {



            $_SESSION['login'] = true;

            if (isset($_POST['remember'])) {
                setcookie('id', $fetch['id'], time()+3600);
                setcookie('key', hash('sha256', $fetch['username']), time()+3600);
            }

            echo "<script>alert('berhasil')</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('password salah')</script>";
            return false;
        }
    } else {

        echo "<script>alert('username tidak ditemukan')</script>";
        return false;
    }
}




function logout(){

    session_start();
    session_unset();
    session_destroy();
    setcookie('id', '', time()-3600);
    setcookie('key', '', time()-3600);
    header('Location:login.php');
    exit;

}
