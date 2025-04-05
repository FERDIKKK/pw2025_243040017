<?php
//get

var_dump($_GET);

$mahasiswa = [
    ["Ikhsan Ferdiansyah", 2430400017, "Teknik Informatika", "ikhsan@gmail.com"],
    ["Ahmad Apriyansyah", 2430400018, "Teknik Informatika", "ahmadapri@gmail.com"],
];




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $m): ?>
        <ul>
            <li></li>
        </ul>

    <?php endforeach; ?>




</body>

</html>