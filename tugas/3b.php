<?php
function urutanAngka($angka)
{
    $no = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $no . " ";
            $no++;
        }
        echo "<br>";
    }
}
echo urutanAngka(5);
