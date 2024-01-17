<?php

function cek_ketersediaan_angkot($noAngkot) {
    if ($noAngkot == 2 || $noAngkot == 9 || $noAngkot == 12 || $noAngkot == 17) {
        return "sedang diperbaiki";
    } elseif ($noAngkot == 10 || $noAngkot == 11) {
        return "tersedia";
    } elseif ($noAngkot >= 4 && $noAngkot <= 20) {
        return "tidak tersedia";
    } else {
        return "tersedia";
    }
}

echo "=== Program Angkot Sederhana ===\n";
for ($no = 1; $no <= 20; $no++) {
    $status = cek_ketersediaan_angkot($no);
    echo "Angkot no - $no $status\n";
}

?>