<?php


$f = fopen("hata.log", "w");
fwrite($f, "Bir hata  meydana geldi!");
fclose($f);



