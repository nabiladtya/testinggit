<?php
//buka file (open file mengambil dari file welcome.txt)
$file = fopen("welcome.txt", "r");
//baca file (read file)
echo fgets($file);
//tutup file (close file)
fclose($file);
?>
