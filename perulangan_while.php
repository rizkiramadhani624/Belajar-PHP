<?php
$i=1; // perulangan while 1 - 10
while ($i <= 10)
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
}
###########################################
$i=0; // penulisan nested loop while 1 - 9
while ($i < 10)
{
   $j=0;
   while ($j < 10)
   {
      echo $i;
      $j++;
   }
   echo "<br />";
   $i++;
}
############################################
$i=1; // penulisan alternatif while 
while ($i <= 10):
   echo "$i";
   echo "<br />";
   $i=$i+1;
endwhile;
?>