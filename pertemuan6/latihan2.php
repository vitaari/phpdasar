<?php
// $mahasiswa = [
//     ["Andika Candra Winata", "009876511", "Teknik Informatika", "putjack@gmail.com"],
//     ["Vita Ari Firnanda", "009888754", "Hukum", "vitaari@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri
$mahasiswa = [ // pembungkus pertama adalah array numerik
    [ //pembungkus kedua adalah array Associative
    "nama" => "Andika Candra Winata",
    "nrp" => "009876511",
    "email" => "putjack@gmail.com",
    "jurusan" => "Teknik Kendaraan Ringan Otomotif",
    "gambar" => "andika.jpg" 
    ],
    [
        "nama" => "Vita Ari Firnanda",
        "nrp" => "009876739",
        "email" => "vitaari@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "vita.jpg"
    ],
    [
        "nama" => "Yanti Indah Kurnia",
        "nrp" => "005876548",
        "email" => "yantiindah@gmail.com",
        "jurusan" => "Multimedia",
        "gambar" => "yanti.jpg",
        "tugas" => [90,75,100]
        ]
];

// cara memanggil dengan cara mencampurkan array numerik dan Associative
// jika ingin menampilkan (Teknik Kendaraan Ringan Otomotif)
echo $mahasiswa[1]["jurusan"];
echo "<br>";

// jika ingin menampilkan atau manggil array di dlm array lagi (array multidimensi)
echo $mahasiswa[2]["tugas"][1];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
          <li>NRP : <?= $mhs["nrp"]; ?></li>
          <li>Email : <?= $mhs["email"]; ?></li>
          <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
         <?php endforeach; ?>
</html>
