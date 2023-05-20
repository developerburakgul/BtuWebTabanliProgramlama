<b>Hello</b> world!
<hr>

<?php

$ad = "Burak";
$ad2 = "Betül";
$sayi = 5;
$stringsayi = "17.05";
$c = "d";
$d = 9999;

echo $$c;// $c değişkeninin değeri olan d değişkeninin değerini verir pointer gibi

echo " <br> Hello World!";

echo "<br> <b>Bu da php ile html kodu </b> yazdırma!";
print "<br> deneme";
echo "<br> $ad"; // çift tırnak olursa içerideki değişkenin değerini ekler
echo '<br> $ad'; // tek tırnak olursa içerideki değişkenin değerini eklemez

echo "<br> $ad" . " "."$ad2"; // stringler nokta ile birleştirilir
echo "<br> deneme " . ($sayi+$stringsayi); // string ve sayı toplanırsa string olarak eklenir

echo "<hr>";

for ($i=0; $i < 10; $i++) { 
    $j =0;
    while ($j < 10) {
        echo "$j  ";
        $j++;
    }
    if ($j == 10){
        echo "<br>";
    }else {
        ;
    }
    
    echo "$i <br>";
}

echo "<hr>";

$dizi = array(0,1,2,3,"6"=>9,"abc"=>12);
// echo "<hr>";



print_r($dizi); // dizi içeriğini yazdırır
echo "<hr>";


// for ($i=0; $i < count($dizi); $i++) { 
//     echo "$dizi[$i] <br>";
    
// } 

foreach ($dizi as $key => $value) {
    // echo "$key. indis : " . "degeri de şu : $value <br>"; // aynı işlevi görürler
    echo "$key .indis :  ". " degeri de şu : $dizi[$key] <br>";
}

function topla($a,$b){
    return $a+$b;
}

echo topla(17,05);

// echo "<hr>";


$var1 = "123asdasdasd";
$var1 = intval($var1); // stringi integera çevirir
echo "<br> $var1";

echo "<hr>";








?>