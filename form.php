
<?php


$alas = $_POST['alas']; // membaca bil pertama dari form
$tinggi = $_POST['tinggi']; // membaca bil kedua dari form

  $hasil = ($alas * $tinggi)/2 ;
  echo "PERHITUNGAN LUAS SEGITIGA";
  echo "</br> Alas :" .$alas; 
  echo "</br> Tinggi : " .$tinggi; 
  echo  "</br>$alas x $tinggi  /2 =".$hasil; 

?>
