<?php
// membuka file
$data = "welcome.txt";
$bukafile = fopen($data, "r");
if (!$bukafile)
{
    print ("File $data gagal dibuka ! ");
    exit;
}
while (!feof($bukafile))
{
    // membaca file
    $data = fgets($bukafile, 50);
    // menampilkan data
    print ("$data <br>");
}
// menutup file
fclose($bukafile);
?>
