<?php
for ($i= 1; $i <= 15; $i++) //perulangan for 1 - 14
{
   echo $i;
   echo "<br />";
}
############################################################
for ($i= 0; $i <= 100; $i=$i+5) //perulangan for kelipatan 5
{
   echo $i;
   echo "<br />";
}
#################################################################
for ($i=0; $i <10; $i++) //perulangan for bersarang (nested loop)
{
   for ($j=0; $j <10; $j++)
   {
      echo $i;
   }
   echo "<br />";
}
##################################################################
for ($i= 1; $i <= 15; $i++) : //alternatif perulangan
   echo $i;
   echo "<br />";
endfor;
?>