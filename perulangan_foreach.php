<?php
$nama = array("Andri","Joko","Sukma","Rina","Sari");
 
foreach ($nama as $val)
{
   echo "$val";
   echo "<br />";
}
#####################################################
$nama = array(
        1=>"Andri",
        6=>"Joko",
        12=>"Sukma",
        45=>"Rina",
        55=>"Sari");
 
foreach ($nama as $kunci =>$isi) //ini variabel perantara ke 2
{
   echo "Urutan ke-$kunci adalah $isi";
   echo "<br />";
}
?>