<?php

echo "<h1>=== Program Biodata Sederhana Function ===</h1>";
$namaLengkap = "nama : M.Rafiyansah <br />";
$umur = "umur : 16 <br />";
$kelas = "kelas : X RPL 2 <br />";
$tempatTanggalLahir = "Tempat Tanggal Lahir : Jakarta, 9 Juni 2007 <br />";
$noWa = "Nomor WhatsApp : 085798621070 <br />";
$alamat = "Alamat : Jl. Sumedang Raya <br />";

function namaLengkap(){
    global $namaLengkap, $umur, $kelas, $tempatTanggalLahir, $noWa, $alamat;
    echo $namaLengkap, $umur, $kelas, $tempatTanggalLahir, $noWa, $alamat;
}
echo namaLengkap();
?>