<?php
//pengulangan array
//for /foreach
$nama = ["epan", "cipta", "akan", "u", "asa", "esok"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>


    <?php for ($i = 0; $i < count($nama); $i++) { ?>
        <div class="kotak"><?php echo $nama[$i]; ?></div>
    <?php } ?>

    <div class="clear">

    </div>
    <?php foreach ($nama as $a) {   ?>
        <div class="kotak"><?php echo $a;  ?></div>
    <?php } ?>
</body>

</html>