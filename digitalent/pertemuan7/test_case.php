<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Nilai Peserta Ujian</title>
</head>
<body>
    <h1>Masukkan Nilai Peserta Ujian</h1>
    
    <!-- Form pertama untuk memasukkan jumlah peserta ujian -->
    <form action="" method="post">
        <label for="jumlah">Masukkan Jumlah Peserta Ujian:</label>
        <input type="number" id="jumlah" name="jumlah" required>
        <input type="submit" name="submit" value="Lanjutkan">
    </form>

    <?php
    //Mengecek apakah form pertama telah disubmit dan jumlah peserta diinput
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah']; // Mengambil jumlah peserta yang diinput

        // Menampilkan form kedua untuk memasukkan nilai masing-masing peserta
        echo '<form action="" method="post">';
        for ($i = 1; $i <= $jumlah; $i++) {
            echo "<label for='peserta$i'>Nilai Peserta Ujian $i:</label>";
            echo "<input type='number' id='peserta$i' name='nilai[]' required><br>";
        }
        echo '<input type="submit" value="Hitung Nilai">';
        echo '</form>';
    }

    // Mengecek apakah form kedua telah disubmit dan niai-nilai peserta diinput
    if (isset($_POST['nilai'])) {
        $nilaiArray = $_POST['nilai']; // Mengambil nilai-nilai yang diinput
        $totalNilai = 0;
        $jumlahNilai = count($nilaiArray); // Menghitung jumlah nilai yang diinput

        // Menghitung total nilai
        foreach ($nilaiArray as $nilai) {
            $totalNilai += $nilai;
        }

        // Menghitung rata-rata nilai
        $rataRata = $totalNilai / $jumlahNilai;

        // Menentukan grade berdasarkan rata-rata menggunakan ifelse
        if ($rataRata >= 90) {
            $grade = "A";
        } elseif ($rataRata >= 80) {
            $grade = "B";
        } elseif ($rataRata >= 70) {
            $grade = "C";
        } elseif ($rataRata >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        // Menampilkan rata-rata nilai dan grade keseluruhan
        echo "<h2>Rata-rata Nilai: $rataRata</h2>";
        echo "<h2>Akreditasi: $grade</h2>";
        
        // Menampilkan nilai dan grade masing-masing peserta menggunakan switch
        echo "<h3>Nilai dan Grade Peserta:</h3>";
        foreach ($nilaiArray as $index => $nilai) {
            // Menentukan grade masing-masing peserta menggunakan switch
            switch (true) {
                case ($nilai >= 90):
                    $gradePeserta = "A,Sangat Bagus";
                    break;
                case ($nilai >= 80):
                    $gradePeserta = "B, Bagus";
                    break;
                case ($nilai >= 70):
                    $gradePeserta = "C, Cukup";
                    break;
                case ($nilai >= 60):
                    $gradePeserta = "D, Perlu Banyak Belajar";
                    break;
                default:
                    $gradePeserta = "F, Ayo belajar lebih Keras";
                    break;
            }
            // Menampilkan nilai dan grade tiap peserta
            echo "Peserta " . ($index + 1) . ": Nilai = $nilai, Grade = $gradePeserta<br>";
        }
    }
    ?>
</body>
</html>
