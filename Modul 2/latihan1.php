<?php
    $angka_a = '10';
    $angka_b = '2';

    $kali = $angka_a * $angka_b;
    $bagi = $angka_a / $angka_b;
    $tambah = $angka_a + $angka_b;
    $kurang = $angka_a - $angka_b;
    $mod = $angka_a % $angka_b;

    echo "<h3> Hasil Operasi Menggunakan Operator Aritmatik</h3>";
    echo "Perkalian ".$angka_a." * ".$angka_b." = ".$kali." <br>";
    echo "Pembagian ".$angka_a." / ".$angka_b." = ".$bagi." <br>";
    echo "Penjumlahan ".$angka_a." + ".$angka_b." = ".$tambah." <br>";
    echo "Pengurangan ".$angka_a." - ".$angka_b." = ".$kurang." <br>";
    echo "Modulus atau sisa hasil bagi ".$angka_a." / ".$angka_b." = ".$mod." <br>";
?>
