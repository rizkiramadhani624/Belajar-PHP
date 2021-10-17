<?php
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"e");
echo $posisi;
// 1
###################################################
$kalimat="Sedang serius belajar PHP di duniailkom";
$cari="serius";
$posisi=strpos($kalimat,$cari);
echo $posisi;
// 7
###################################################
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"CSS");
if ($posisi){
  echo "Ketemu";
}
else {
  echo "Tidak ketemu";
}
// Tidak ketemu
###################################################
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"Sedang");
if ($posisi){
  echo "Ketemu";
}
else {
  echo "Tidak ketemu";
}
// Tidak ketemu
###################################################
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"Sedang");
if ($posisi !== FALSE){
  echo "Ketemu";
}
else {
  echo "Tidak ketemu";
}
// Ketemu
###################################################
$kalimat="Sedang serius belajar PHP di duniailkom";
$posisi=strpos($kalimat,"e",9);
echo $posisi;
// 15
####################################################
$kalimat="Sedang serius belajar PHP di duniailkom"; 
$posisi=stripos($kalimat,"php",9); //pencarian dimulai dr karakter 9 untuk mencapai kata ke 3
echo $posisi;
// 22
?>