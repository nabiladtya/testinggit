<?php
// Membuat array 2 dimensi yang berisi array asosiatif
$berita = [  
    [
        "judul" => "Mengenal PHP dan MySQL untuk Pemula", 
        "penulis" => "Programmer Indonesia"
    ],
    [
        "judul" => "Belajar PHP dari Dasar hingga Mahir", 
        "penulis" => "Komunitas PHP"
    ],
    [
        "judul" => "Membangun Aplikasi Web dengan PHP", 
        "penulis" => "Developer Nusantara"
    ]
];

// Menampilkan array
foreach($berita as $item){
    // Menampilkan judul artikel
    echo "<h2>".$item["judul"]."</h2>";
    
    // Menampilkan penulis artikel
    echo "<p>".$item["penulis"]."</p>";
    
    // Menampilkan garis horizontal sebagai pemisah
    echo "<hr>";
}
?>
