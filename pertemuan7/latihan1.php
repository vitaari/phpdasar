<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Andika Candra Winata",
    "nrp" => "009876511",
    "email" => "putjack@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "andika.jpg" 
    ],
    [
        "nama" => "Vita Ari Firnanda",
        "nrp" => "009876739",
        "email" => "vitaari@gmail.com",
        "jurusan" => "Teknik Otomotif",
        "gambar" => "vita.jpg"
    ]
 ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title>GET</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
      
 </body>
 </html>

 <!-- 0:26:40 -->
