<?php
for ($i=0; $i <10; $i++) //continue melangkahi angka 7
{
  if ($i==7)
  {
  continue;
  }
echo $i;
echo "<br />";
}
##########################################################################################
for ($i=0; $i <10; $i++) //continue melangkahi angka 4 nested loop dan melanjutkan looping 
{
  for ($j=0; $j <10; $j++)
  {
      if ($i==4)
        {
        continue 2;
        }
      echo $i;
  }
echo "<br />";
}
?>