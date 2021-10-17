<?php
$kalimat = "satu dua tiga empat lima";
$arr_kalimat = explode (" ",$kalimat);
var_dump ($arr_kalimat);
  
// array(5) {
// [0]=> string(4) "satu" [1]=> string(3) "dua"
// [2]=> string(4) "tiga" [3]=> string(5) "empat"
// [4]=> string(4) "lima"
// }
#################################################
$kalimat = "satu, dua, tiga, empat, lima";
$arr_kalimat = explode (", ",$kalimat);
var_dump ($arr_kalimat);
  
// array(5) {
// [0]=> string(4) "satu" [1]=> string(3) "dua"
// [2]=> string(4) "tiga" [3]=> string(5) "empat"
// [4]=> string(4) "lima"
// }
#################################################
$kalimat = "satu, dua, tiga, empat, lima";
$arr_kalimat = explode (", ",$kalimat, 3);
var_dump ($arr_kalimat);
  
// array(3) {
// [0]=> string(4) "satu"
// [1]=> string(3) "dua"
// [2]=> string(17) "tiga, empat, lima"
// }
##################################################
$kalimat = "satu, dua, tiga, empat, lima";
$arr_kalimat = explode (", ",$kalimat, -3);
var_dump ($arr_kalimat);
  
// array(2) {
// [0]=> string(4) "satu"
// [1]=> string(3) "dua"
// }
?>