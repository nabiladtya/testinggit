<!DOCTYPE html>
<html>

<head>
    <title>Digital Talent</title>
</head>

<body>
    <h2>List Mahasiswa</h2>
    <a href="form-input.php">
        <button style="margin-bottom: 20px;">Tambah Mahasiswa</button>
    </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>Aksi</th> <!-- Tambahkan kolom aksi -->
        </tr>
        <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['jurusan'] . "</td>
                <td>
                    <a href='form-edit.php?id_mhs=$row[id_mhs]'>edit</a>
                    <a href='delete.php?id_mhs=$row[id_mhs]'>delete</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>
