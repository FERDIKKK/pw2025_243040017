<?php
// pengulangan /looping
//for, while, do while, foreach
//while
//1.Nilai awal
//2.kondisi terminasi/saat looping berhenti
//3.increment
$i = 1;
while ($i >= 10) {
    echo "<h1>dika najril $i x </br></h1> ";
    $i = $i - 1;

    for ($i = 1; $i <= 10; $i + 2) {
        echo "hello world $i x <br>";
    }
}
