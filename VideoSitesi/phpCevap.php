<?php 

$kisi=new\stdClass();
$kisi->isim="kerem";
$kisi->soyisim="ayseli";
$kisi->yas=20;

$cevapJson=json_encode($kisi);
echo $cevapJson;
?>