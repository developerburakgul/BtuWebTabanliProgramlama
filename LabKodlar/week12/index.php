<?php

require_once "config.php";

$q=mysqli_query($db,"SELECT * FROM `deneme_tablosu`");
// $dizi = mysqli_fetch_all($q,MYSQLI_ASSOC);

// print_r($dizi);
// echo "<br>";

// echo  $dizi[1]['isim'];

echo "<br>";

while($kullanici=mysqli_fetch_assoc($q)){
    echo  "#" . $kullanici['id']. " " .$kullanici['isim'] . "<br> \n";

}






?>