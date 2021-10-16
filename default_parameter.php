<?php
function tambah($a,$b=2) //parameter pertambahan
{
   return $a+$b;
}
 
echo tambah(2); // hasil: 4
echo tambah(10); // hasil: 12
echo tambah(4,4); // hasil: 8
######################################################
function pangkat($nilai, $pangkat=2) //parameter perpangkatan
{
   $hasil=1;
   for ($i=1;$i<=$pangkat;$i++)
   {
      $hasil=$hasil*$nilai;
   }
   return $hasil;
}
 
//Test beberapa kasus inputan untuk fungsi pangkat()
echo "pangkat(5) = ".pangkat(5);
echo "<br />";
echo "pangkat(3) = ".pangkat(3);
echo "<br />";
echo "pangkat(2,8) = ".pangkat(2,8);
echo "<br />";
echo "pangkat(3.5,3) = ".pangkat(3.5,3);
echo "<br />";
?>