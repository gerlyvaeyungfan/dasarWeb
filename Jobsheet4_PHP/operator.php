<?php
$a = 10;
$b = 5;
echo"<h3>Operator Aritmatika<br></h3>";
$hasilTambah = $a + $b;
echo "Hasil penjumlahan $a dan $b adalah : $hasilTambah<br>";
$hasilKurang = $a - $b;
echo "Hasil pengurangan $a dan $b adalah : $hasilKurang<br>";
$hasilKali = $a * $b;
echo "Hasil penrkaliann $a dan $b adalah : $hasilKali<br>";
$hasilBagi = $a / $b;
echo "Hasil pembagian $a dan $b adalah : $hasilBagi<br>";
$sisaBagi = $a % $b;
echo "Hasil sisa bagi dari $a dan $b adalah : $sisaBagi<br>";
$pangkat = $a ** $b;
echo "Hasil perpangkatan dari $a pangkat $b adalah : $pangkat<br>";

echo"<h3>Operator Perbandingan<br></h3>";
$hasilSama = $a == $b;
echo "Hasil dari $a sama dengan $b adalah : $hasilSama<br>";
$hasilTidakSama = $a != $b;
echo "Hasil dari $a tidak sama dengan $b adalah : $hasilTidakSama<br>";
$hasilLebihKecil = $a < $b;
echo "Hasil dari $a lebih kecil dari $b adalah : $hasilLebihKecil<br>";
$hasilLebihBesar = $a > $b;
echo "Hasil dari $a lebih besar dari $b adalah : $hasilLebihBesar<br>";
$hasilLebihKecilSama = $a <- $b;
echo "Hasil dari $a lebih kecil sama dengan $b adalah : $hasilLebihKecilSama<br>";
$hasilLebihBesarSama = $a >= $b;
echo "Hasil dari $a lebih besar sama dengan $b adalah : $hasilLebihBesarSama<br>";

echo"<h3>Operator Logika<br></h3>";
$hasilAnd = $a && $b;
echo "Hasil penugasan AND dari $a dan $b adalah : $hasilAnd<br>";
$hasilOr = $a || $b;
echo "Hasil penugasan atau dari $a dan $b adalah : $hasilOr<br>";
$hasilNotA = !$a;
echo "Hasil dari tidak sama dengan $a adalah : $hasilNotA<br>";
$hasilNotB = !$b;
echo "Hasil dari tidak sama dengan $b adalah : $hasilNotB<br>";

echo"<h3>Operator Penugasan<br></h3>";
$c = $a += $b;
echo "Hasil dari penugasan 10 += $b adalah $c<br>";
$d = $a -= $b;
echo "Hasil dari penugasan $d -= $b adalah $d<br>";
$e = $a *= $b;
echo "Hasil dari penugasan $d *= $b adalah $e<br>";
$f = $a /= $b;
echo "Hasil dari penugasan $e /= $b adalah $f<br>";
$g = $a %= $b;
echo "Hasil dari penugasan $f %= $b adalah $g<br>";

$a = 10;
$b = 5;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo"<h3>Operator Identik<br></h3>";
echo "Hasil identik dari $a dan $b adalah $hasilIdentik<br>";
echo "Hasil tidak identik dari $a dan $b adalah $hasilTidakIdentik<br>";

echo "<br><br><br><br>";