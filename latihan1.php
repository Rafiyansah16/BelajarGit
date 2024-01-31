<?php 

$abjad= ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$mapel = ["Pendidikan Agama dan budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika", "Bahasa Inggris", "Dasar2 KEjuruan RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
    <style>
        .bulet{
            width: 50px;
            height: 50px;
            background: red;
            text-align: center;
            line-height: 50px;
            color: #fff;
            border-radius: 50%;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
        .kotak{
            width: 150px;
            height: 150px;
            background: orange;
            text-align: center;
            line-height: 150px;
            color: #fff;
            float: left;
            margin: 5px;
            border-top-radius: 30%;
        }
    </style>
</head>
<body>
    <h1>Abjad A - Z</h1>
    <?php for($i = 0; $i < count($abjad); $i++) : ?>
        <div class="bulet"><?= $abjad[$i]; ?></div>
        <?php endfor; ?>

        <div class="clear"></div>
    <h1>Mapel RPL </h1>
        <?php foreach($mapel as $data) : ?>
            <div class="kotak"><?= $data; ?></div>
            <?php endforeach; ?>
</body>
</html>