<?php

$nilaiHarian = 90 * 30 / 100;
$nilaiUts = 90 * 30 / 100;
$nilaiUas = 90 * 40 / 100;
$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;

echo "<h1/>Muhammad Rafiyansah</h1>";
echo "==================================================== <br/>";
echo "Nilai Hariann : $nilaiHarian <br/>";
echo "Nilai UTS : $nilaiUts <br/>";
echo "Nilai UAS : $nilaiUas <br/>";
echo "Nilai Akhir : $nilaiAkhir <br/>";


$nilaiPredikat = $nilaiAkhir;
if($nilaiPredikat >=90 && $nilaiPredikat <=100){
    echo "Predikat : A+";
}
else if($nilaiPredikat >=85 && $nilaiPredikat <=89){
    echo "Predikat : A";
}
else if($nilaiPredikat >=80 && $nilaiPredikat <=84){
    echo "Predikat : B+";
}
else if($nilaiPredikat >=76 && $nilaiPredikat <=79){
    echo "Predikat : B";
}
else if($nilaiPredikat >=60 && $nilaiPredikat <=75){
    echo "Predikat : C";
}
else if($nilaiPredikat >=40 && $nilaiPredikat <=59){
    echo "Predikat : D";
}
else if($nilaiPredikat >=0 && $nilaiPredikat <=39){
    echo "Predikat : E";
}
else if($nilaiPredikat >=0 && $nilaiPredikat <=39){
    echo "Predikat : E";
}else {
    echo "Pilihan tidak tersedia";
}


?>