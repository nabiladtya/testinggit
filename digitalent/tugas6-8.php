<?php

function hitungDiskon($totalBelanja) {
    if ($totalBelanja >= 100000) {
        return 0.10; // Diskon 10%
    } elseif ($totalBelanja >= 50000) {
        return 0.05; // Diskon 5%
    } else {
        return 0.00; // Tidak ada diskon
    }
}

function hitungTotalBayar($totalBelanja) {
    $diskon = hitungDiskon($totalBelanja);
    $nilaiDiskon = $totalBelanja * $diskon;
    $totalBayar = $totalBelanja - $nilaiDiskon;
    return [$nilaiDiskon, $totalBayar];
}

$totalBelanja = 130000;
list($diskon, $totalBayar) = hitungTotalBayar($totalBelanja);

echo "<span style='color: blue;'>Total Harga Belanja: Rp. " . number_format($totalBelanja, 2, ',', '.') . "</span><br>";
echo "<span style='color: green;'>Diskon Belanja: Rp. " . number_format($diskon, 2, ',', '.') . "</span><br>";
echo "<span style='color: red;'>Total yang harus dibayar setelah diskon: Rp. " . number_format($totalBayar, 2, ',', '.') . "</span><br>";
?>
