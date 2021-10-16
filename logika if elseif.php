<?php
$a=15;
$b=8;
 
if ($a > $b) //opsi biasa
{
    echo "a lebih besar daripada b";
} 
elseif ($a == $b) 
{
    echo "a sama besar dengan b";
} 
else
{
    echo "a lebih kecil daripada b";
}
?>
###################################
$c=15;
$d=8;
 
if ($c > $d): //opsi alternatif
    echo "c lebih besar daripada d";
elseif ($c == $d):
    echo "c sama besar dengan d";
else:
    echo "c lebih kecil daripada d";
endif;
?>