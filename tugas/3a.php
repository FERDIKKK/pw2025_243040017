<?php
//luas lingkaran
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluaslingkaran($r)
{
    return 3.14 * $r * $r;
}
$rluas = 10;
$rluas = hitungluaslingkaran($rluas);
echo "jari-jari = $rluas cm.<br>";
echo "Luas Lingkaran = $rluas cm2<br>";

echo "<hr>";

//keliling lingkaran
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungkelilinglingkaran($r)
{
    return 2 * 3.14 * $r;
}
$rkeliling = 20;
$keliling = hitungkelilinglingkaran($rkeliling);
echo "jari-jari = $rkeliling cm.<br>";
echo "keliling Lingkaran = $keliling cm2<br>";

echo "<hr>";
