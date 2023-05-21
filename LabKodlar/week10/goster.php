<?php

$arr = array("a" => 123, "b" => 456);
$bakiye = 250.0;
extract($_GET);
if( $adsoyad || $numara )
{
    echo "Merhaba, ". $adsoyad. "<br />";
    echo "Numaranızı ". $numara. " olarak girildi.";
    echo "Bakiyeniz: ".$bakiye.' TL';
}
?>