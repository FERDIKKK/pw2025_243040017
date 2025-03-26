<?php
//array
//variabel dapat menampung banyak nilai

$mahasiswa = ["Ikhsan Ferdiansyah", "Dwi Zaky", "Ahmad Ibnu Sulhan", "Yoga", "Ahmad Apriyansyah", "Ikbal Putra", "Dimas", "Sri Wahyuningsih", "Siti Amalia", "Nur Dinatul"];
$npm = ["243040010", "243040011", "243040012", "243040013", "243040014", "243040015", "243040016", "243040017", "243040018", "243040019", "243040020"];
$code = [123, "tulisan", false];

//menampilkan array
//var_dump() / print_r()
var_dump($mahasiswa);
echo "<br>";
print_r($npm);
echo "<br>";

//menampilkan 1 elemen pada array
echo $code[0];
echo "<br>";
echo $npm[1];
