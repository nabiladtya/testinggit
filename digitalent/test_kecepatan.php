<?php
$startTime = microtime(true);

// Blok kode yang ingin diukur performansinya
for ($i = 0; $i < 1000; $i++) {
    // Proses yang memakan waktu
}

$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo "Waktu eksekusi adalah: " . $executionTime . " detik";
?>
