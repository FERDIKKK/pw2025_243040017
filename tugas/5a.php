<?php
//array
//variabel dapat menampung banyak nilai

$mahasiswa = [
    ["Ikhsan Ferdiansyah", 2430400017, "Teknik Informatika", "ikhsan@gmail.com"],
    ["Ahmad Apriyansyah", 2430400018, "Teknik Informatika", "ahmadapri@gmail.com"],
    ["Nur dinatul", 2430400019, "Teknik Informatika", "dinatul@gmail.com"],
    ["Fahmi Adriyansyah", 2430400020, "Teknik Informatika", "fahmiadr@gmail.com"],
    ["Vellerine Gracia Aryandi ", 2430400021, "Teknik Informatika", "gracian@gmail.com"],
    ["Ahmad Ibnu Sulkan", 2430400022, "Teknik Informatika", "sulhanguys@gmail.com"],
    ["Dikha", 2430400023, "Teknik Informatika", "dikha29@gmail.com"],
    ["Najriel Bintang Putra Derajat", 2430400021, "Teknik Informatika", "nazrilkakang@gmail.com"],
    ["Dwi Zaky Wibowo", 2430400021, "Teknik Informatika", "jekirok@gmail.com"],
    ["Akbar Maulana", 2430400021, "Teknik Informatika", "barma@gmail.com"],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) :    ?>
        <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NRP : <?= $m[1]; ?></li>
            <li>Prodi : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>


        </ul>

    <?php endforeach    ?>

</body>

</html>