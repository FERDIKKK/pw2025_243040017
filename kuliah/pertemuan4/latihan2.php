<?php
//nested loop/pengulangan bersarang

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        echo "$j ";
    }
    echo "<br>";
    for ($i = 8; $i <= 1; $i++) {
        for ($j = 1; $j <= 2; $j++) {
            echo "$j ";
        }
    }
    echo "<hr>";
    for ($i = 1; $i <= 8; $i--) {
        for ($j = 8; $j <= 8; $j++) {
            echo "$j ";
        }
        echo "<hr>";
    }
    for ($i = 1; $i <= 8; $i--) {
        for ($j = 8; $j <= 8; $j++) {
            echo "$j ";
        }
        echo "<hr>";
    }
    for ($i = 1; $i <= 8; $i--) {
        for ($j = 8; $j <= 8; $j++) {
            echo "$j ";
        }
        echo "<hr>";
    }
}
