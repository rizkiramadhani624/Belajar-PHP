<?php
function penambahan()
{
   //ambil variable parameter
   $array_argumen = func_get_args();
   $jumlah_argumen = func_num_args();
   $nilai_argumen_ke_2 = func_get_arg(1); //index dimulai dari 0
 
   //tampilkan hasil variable parameter
   echo "Jumlah argumen: $jumlah_argumen";
   echo "<br />";
 
   echo "Nilai argumen ke-2: $nilai_argumen_ke_2";
   echo "<br />";
 
   echo "Array Argumen: ";
   var_dump($array_argumen);
 
   echo "<br />";
   echo "<br />";
   return;
}
 
echo "Rincian dari fungsi penambahan(1,2) : ";
echo "<br />";
penambahan(1,2);
 
echo "Rincian dari fungsi penambahan(5,4,3,2,1) : ";
echo "<br />";
penambahan(5,4,3,2,1);
 
echo "Rincian dari fungsi penambahan(0,6,8,19) : ";
echo "<br />";
echo penambahan(0,6,8,19);
####################################################################
function pertambahan()
{
   //ambil variable parameter
   $jumlah_argumen = func_num_args();
 
   //proses penambahan
   $nilai=0;
   for ($i = 0; $i < $jumlah_argumen; $i++)
   {
      $nilai += func_get_arg($i);
   }
   return $nilai;
   }
 
echo "penambahan(1,2) = ".penambahan(1,2);
echo "<br />";
 
echo "penambahan(5,4,3,2,1) = ".penambahan(5,4,3,2,1);
echo "<br />";
 
echo "penambahan(0,6,8,19,20,44,21) = ".penambahan(0,6,8,19,20,44,21);
?>