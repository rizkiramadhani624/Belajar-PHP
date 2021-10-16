<?php
for ($i=0; $i <100; $i++) //break dalam for
{
  if ($i==13)
  {
  break;
  }             
echo $i;
echo "<br />";
}
#############################################################################
$i=0; //break dalam while
while ($i < 100)
{
  $i++;
  if ($i==13)
  {
  break;
  }
echo $i;
echo "<br />";
##############################################################################
for ($i=0; $i <10; $i++) //break melangkahi angka 4 dalam perulangan bersarang 
{
  for ($j=0; $j <10; $j++)
  {
    if ($i==4)
    {
      break;
    }
    echo $i;
  }
echo "<br />";
}
#################################################################################
for ($i=0; $i <10; $i++) //break melangkahi angka 4 dan memberhentikan perulangan
{
  for ($j=0; $j <10; $j++)
  {
    if ($i==4)
    {
      break 2;
    }
    echo $i;
  }
echo "<br />";
}
?>
