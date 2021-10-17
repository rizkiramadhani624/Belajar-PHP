<?php
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(" ",$arr_kata);
echo $kalimat;
// satu dua tiga empat lima
#######################################################
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(", ",$arr_kata);
echo $kalimat;
// satu, dua, tiga, empat, lima
?>
 
<br>
 
<?php
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(" | ",$arr_kata);
echo $kalimat;
// satu | dua | tiga | empat | lima
########################################################
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode($arr_kata);
echo $kalimat;
// satuduatigaempatlima
?>
