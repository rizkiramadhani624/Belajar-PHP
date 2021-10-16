<?php
$a = 5; //variabel scope menghalangi akses ke data ketika variabel di panggil
 
function coba()
{
   $a=10;
   $b=7;
}
 
// pemanggilan fungsi coba()
coba();
echo $a; // 5
echo $b; // error:notice
#########################################################
$b = 7;
 
function coba()
{
   $a=10;
   echo $a;
   echo $b; // tag didalam variabel tdk bisa akses keluar 
}
 
coba();
##########################################################
$a = 7;
 
function coba()
{
   global $a;
   global $b;
   $b=15;
   echo $a;  //7
   echo $b;  //15
}
 
coba();
echo $a; //7
echo $b; //15 variabel global memungkinkan akses ke dalam fungsi begitu sebaliknya
##################################################################################
function coba()
{
   static $a=0;
   $a=$a+1;
   return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
}
//variabel static mempertahankan nilainya pada setiap pemanggilan fungsi
echo coba();
echo coba();
echo coba();
echo coba();
?>