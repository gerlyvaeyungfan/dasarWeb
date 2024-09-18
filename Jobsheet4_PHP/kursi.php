<?php
echo "<h4>Kursi Restaurant</h4>";
$totalKursi = 45;
echo "Total kursi: $totalKursi<br>";
$kursiTerisi = 28;
echo "Kursi terisi: $kursiTerisi<br><br>";

$kursiKosong = $totalKursi - $kursiTerisi;
$porsiKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang kosong di restoran: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: " . number_format($porsiKursiKosong, 2) . "%<br>";
