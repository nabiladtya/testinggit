<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Makanan</title>
    <script>
        function hitungTotal() {
            // Mendapatkan nilai dari input jumlah pesanan
            var nasiGoreng = parseInt(document.getElementsByName('nasi_goreng')[0].value) || 0;
            var ayamGoreng = parseInt(document.getElementsByName('ayam_goreng')[0].value) || 0;
            var esTeh = parseInt(document.getElementsByName('es_teh')[0].value) || 0;
            var kopi = parseInt(document.getElementsByName('kopi')[0].value) || 0;

            // Mendefinisikan harga masing-masing makanan
            var hargaNasiGoreng = 10000;
            var hargaAyamGoreng = 12000;
            var hargaEsTeh = 2000;
            var hargaKopi = 3000;

            // Menghitung total harga berdasarkan jumlah pesanan
            var total = (nasiGoreng * hargaNasiGoreng) +
                        (ayamGoreng * hargaAyamGoreng) +
                        (esTeh * hargaEsTeh) +
                        (kopi * hargaKopi);

            // Menampilkan total harga pesanan dengan format uang
            var formattedTotal = total.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

            // Menampilkan hasil menggunakan alert
            alert("Total Pesanan: " + formattedTotal);

            // Menampilkan total harga di halaman
            document.getElementById('total').textContent = "Total Pesanan: " + formattedTotal;
        }
    </script>
</head>
<body>
    <!-- Judul halaman -->
    <h1>Form Pemesanan Makanan</h1>
    
    <!-- Formulir pemesanan makanan -->
    <form onsubmit="event.preventDefault(); hitungTotal();">
        <table>
            <tr>
                <!-- Header tabel untuk nama makanan, harga, dan jumlah pesanan -->
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <!-- Baris pertama untuk Nasi Goreng -->
                <td>Nasi Goreng</td>
                <td>Rp10.000</td>
                <!-- Input jumlah pesanan untuk Nasi Goreng -->
                <td><input type="number" name="nasi_goreng" value="0"></td>
            </tr>
            <tr>
                <!-- Baris kedua untuk Ayam Goreng -->
                <td>Ayam Goreng</td>
                <td>Rp12.000</td>
                <!-- Input jumlah pesanan untuk Ayam Goreng -->
                <td><input type="number" name="ayam_goreng" value="0"></td>
            </tr>
            <tr>
                <!-- Baris ketiga untuk Es Teh -->
                <td>Es Teh</td>
                <td>Rp2.000</td>
                <!-- Input jumlah pesanan untuk Es Teh -->
                <td><input type="number" name="es_teh" value="0"></td>
            </tr>
            <tr>
                <!-- Baris keempat untuk Kopi -->
                <td>Kopi</td>
                <td>Rp3.000</td>
                <!-- Input jumlah pesanan untuk Kopi -->
                <td><input type="number" name="kopi" value="0"></td>
            </tr>
        </table>
        <br>
        <!-- Tombol untuk menghitung total pesanan -->
        <input type="submit" value="Hitung Total">
    </form>
    
    <!-- Tempat untuk menampilkan total pesanan -->
    <p id="total"></p>
</body>
</html>
