<?php
$program ="<h3>=== Program Menghitung Pembelian Produk ===<br/></h3>";
echo "$program";

$harga = 150000;
$jumlah = 2;

if($harga > 10000){
    $totalHarga = $harga * $jumlah - 50000;
}else {
    $totalHarga = $harga*$jumlah;
}

echo "Nama Barang : Kipas Angin Kosmos <br/>";
echo "Kode Barang : 4001<br/>";
echo "Kategori : Elektronik<br/>";
echo "Harga Barang : Rp $harga<br/>";
echo "Jumlah Barang : $jumlah<br/>";
echo "Total Harga : $totalHarga <br/> ";
echo "Status : <span style = 'color:yellow;'> Proses </span>"
?>