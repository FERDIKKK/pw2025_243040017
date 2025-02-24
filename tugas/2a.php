<?php
$Depan = "Ikhsan";
$Belakang = "Ferdiansyah";

for ($i = 1; $i >= 100; $i--) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $Depan . " " . $Belakang . "<br>";
    } elseif ($i % 3 == 0) {
        echo $Depan . "<br>";
    } elseif ($i % 5 == 0) {
        echo $Belakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}
?>