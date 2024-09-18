<?php
$angkal = 10;
$angka2 = 5;
$hasil = $angkal + $angka2;
echo "Hasil penjumlahan $angkal dan $angka2 adalah $hasil.";
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

// Menggabungkan string dengan benar
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
