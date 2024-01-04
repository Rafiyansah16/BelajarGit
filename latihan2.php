<?php

// Jadi, hasil True akan tercetak jika semua nilai (harian, UTS, dan akhir) memenuhi atau melebihi KKM masing-masing. Jika salah satu nilai di bawah KKM, hasilnya akan False.

$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$KkmNilaiHarianBagus = $nilaiHarian >= 70;
$KkmNilaiUtsBagus = $nilaiUts >= 80;
$KkmNilaiAkhirBagus = $nilaiAkhir >= 80;

$hasil1 = $KkmNilaiHarianBagus && $KkmNilaiUtsBagus && $KkmNilaiAkhirBagus;
$hasil2 = $KkmNilaiHarianBagus || $KkmNilaiUtsBagus || $KkmNilaiAkhirBagus;
var_dump($hasil1);
var_dump($hasil2);


?>