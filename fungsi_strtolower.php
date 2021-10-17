<?php
$dari_user = "Reza";
$dari_database = "reza";
  
if (strtolower($dari_user) == strtolower($dari_database)) {
  echo "Sama";
}
else {
  echo "Tidak Sama";
}
  
// Hasil: Sama
?>