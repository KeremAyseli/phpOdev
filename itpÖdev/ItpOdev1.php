<?php 
$ad =htmlspecialchars($_POST["isim"]);
$soyad=htmlspecialchars($_POST["soyisim"]);
$kimlikNo=htmlspecialchars($_POST["kimlikNo"]);
$sehir=htmlspecialchars($_POST["sehir"]);

echo"Merhaba <b>".$ad."</b><br>";
echo "<b><i>Kimlik bilgileri</b></i><br>".$ad."<br>".$soyad."<br>".$kimlikNo."<br>".$sehir."."
?>