<?php
$angka = 1999.12345;
$angka_format = number_format($angka);
echo $angka_format;
// 1,999
#######################################
$angka = 1999.99;
$angka_format = number_format($angka);
echo $angka_format;
// 2,000
########################################
$angka = 1999.888;
$angka_format = number_format($angka,2);
echo $angka_format;
// 1,999.89
#########################################
$angka = 1999;
$angka_format = number_format($angka,3);
echo $angka_format;
// 1,999.000
################################################
$angka = 1999.12345;
$angka_format = number_format($angka,2,",",".");
echo $angka_format;
// 1.999,12
################################################
$angka = 3050145.756;
$angka_format = number_format($angka,2,",",".");
echo "Rp. ".$angka_format;
// Rp. 3.050.145,76
?>