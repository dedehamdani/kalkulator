<?php
class segitiga {
    var $alas;
    var $tinggi;
   
//pertambahan
    function luas($alas, $tinggi){
        $this->luas =1/2 $alas * $tinggi;
    }

}


$alas = $_POST["alas"];
$tinggi = $_POST["tinggi"];

//instance
$hasil =new segitiga();
// panggil fungsi kelas
$hasil->luas($number1,$number2);


//tampilkan hasil
echo "<h2>hasil hitung</h2>";
echo "<br/>";
echo "$alas * $tinggi =".$hasil->luas;

?>



