<?php
include 'koneksi.php';  // Menyertakan file koneksi ke database

// Menyimpan data ke dalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk insert data
$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";

// Menjalankan query
mysqli_query($koneksi, $query);

// Mengalihkan ke halaman index.php
header("location:index.php");
?>
