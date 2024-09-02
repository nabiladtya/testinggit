<?php
echo "Penggunaan memori sebelum: " . memory_get_usage() . " bytes\n";

// Blok kode yang ingin diukur konsumsi memorinya
$array = range(1, 100000);

echo "Penggunaan memori setelah: " . memory_get_usage() . " bytes\n";
?>
