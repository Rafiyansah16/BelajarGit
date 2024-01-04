<?php

echo"<h1>HTML dIdalam PHP</h1>";
echo"<h1>=== Biodata Diri===</h1>";
echo"<hr>";

echo" Nama Lengkap : Muhammad Rafiyansah";
echo "<br />";
echo" Tempat, Tanggal Lahir : 09 Juni 2007";
echo "<br />";
echo" No WhatsApp : 085798621070";
echo "<br />";
echo" Deskripsi diri : Menjadi Programmer Handal";


$nama = "Nama Lengkap : M. Rafiyansah";
$tanggalLahir = "Tanggal Lahir : 09 Juni 2007";
$whatsApp = "Nomor WhatsApp : 085798621070";
$deskripsiDiri = "Deskripsi diri : Menjadi Programmer Handal" ;

?>
<br>
<hr>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <h1>PHP Di Dalam HTML</h1>
    <H1>===Biodata Diri===</H1>
    <div><?= "$nama" ?></div>
    <div><?= "$tanggalLahir" ?></div>
    <div><?= "$whatsApp" ?></div>
    <div><?= "$deskripsiDiri" ?></div>
    
</body>
</html>