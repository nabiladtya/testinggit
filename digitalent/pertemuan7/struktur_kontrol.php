<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>
<body>
    <form action="" method="post">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if ($nilai >= 90) {
            echo "Nilai A";
        } elseif ($nilai >= 80) {
            echo "Nilai B";
        } elseif ($nilai >= 70) {
            echo "Nilai C";
        } elseif ($nilai >= 60) {
            echo "Nilai D";
        } else {
            echo "Nilai F";
        }
    }
    ?>
</body>
</html>
