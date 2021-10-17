<?php
$kalimat = "Belajar PHP di Duniailkom";
echo substr($kalimat,8); // PHP di Duniailkom (mulai dari karakter ke 9)
echo "<br>";
echo substr($kalimat,8,6); // PHP di (mulai dari karakter ke 9 dan hanya mengambil 6 karakter)
echo "<br>";
echo substr($kalimat,8,-5); // PHP di Dunia (mulai dari karakter ke 9 dan menghilangkan 5 karakter dr belakang)
echo "<br>";
echo substr($kalimat,-10); // Duniailkom (mulai dari karakter ke 10 dari belakang)
echo "<br>";
echo substr($kalimat,-10,5); // Dunia (mulai dari karakter ke 10 dari belakang dan mengambil hanya 5 karakter)
echo "<br>";
echo substr($kalimat,-10,-3); // Duniail (mulai dari karakter ke 10 dari belakang dan menghilangkan 3 karakter dari belakang)
?>