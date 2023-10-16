<?php
$mahasiswa = [
          ["Andika Candra Winata", "009876511", "Teknik Kendaraan Ringan Otomotif", "putjack@gmail.com"],
          ["Vita Ari Firnanda ", "009876212", "Rekayasa Perangkat Lunak", "vitaari@gmail.com"],
          ["Yanti Indah Kurnia", "009876257", "Multimedia", "yantiindah@gmail.com"],
];

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
          <li>Nama : <?= $mhs[0]; ?></li>
          <li>NRP : <?= $mhs[1]; ?></li>
          <li>Jurusan : <?= $mhs[2]; ?></li>
          <li>Email : <?= $mhs[3]; ?></li>
     </ul>
<?php endforeach; ?>






        
</body>
</html>
