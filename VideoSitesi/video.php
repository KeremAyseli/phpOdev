<?php
$dosyatipleri=array("jpg","png","gif","png","mp3","mp4","wma");
$dosyaYolBirlestirme=pathinfo($_FILES["kullanıcıDosya"]["name"],PATHINFO_EXTENSION); 
echo $_FILES["kullanıcıDosya"]["name"]."<br/>";

if($_FILES["kullanıcıDosya"]["type"]==null){
    echo $_FILES["kullanıcıDosya"]["error"]." Hata<br/>";
    echo"Dosya yok";
}
else{
    echo $_FILES["kullanıcıDosya"]["type"]."<br/>";
}

if($_FILES["kullanıcıDosya"]["type"]=="video/mp4"||$_FILES["kullanıcıDosya"]["type"]=="video/flv"||$_FILES["kullanıcıDosya"]["type"]=="audio/mp3"||$_FILES["kullanıcıDosya"]["type"]=="audio/wma"||
$_FILES["kullanıcıDosya"]["type"]=="image/pjpeg"||$_FILES["kullanıcıDosya"]["type"]=="image/gif"||$_FILES["kullanıcıDosya"]["type"]=="image/png"&&in_array($dosyatipleri,$dosyaYolBirlestirme)){
    if($_FILES["kullanıcıDosya"]["error"]>0){
    echo $_FILES["kullanıcıDosya"]["error"]." Hata<br/>";
}
else{
    echo"Dosya boyutu: ".$_FILES["kullanıcıDosya"]["size"]."<br/>";
    echo"Dosya yolu: ".$_FILES["kullanıcıDosya"]["name"]."<br/>";
  move_uploaded_file($_FILES["kullanıcıDosya"]["tmp_name"],"yukelemeler/" .$_FILES["kullanıcıDosya"]["name"]);

  echo "<html>
     <head></head>
  <body>
  <video height="."600"." width="."600"." controls autoplay id="."video1".">
  <source src="."yukelemeler/".$_FILES["kullanıcıDosya"]["name"]." type="."video/mp4".">
</video>
<button onclick="."videoZamanAyarla()".">Bas</button>
<button onclick="."videoZamanıDondur()".">Bas1</button>
  </body>
  </html>
 ";
 echo'<script type="text/javascript">
 var x = document.getElementById("video1")
 function videoZamanıDondur(){
     alert(x.currentTime)
 }
 function videoZamanAyarla(){
     x.currentTime=6;
 }
 
</script>';
   }
}
?>

