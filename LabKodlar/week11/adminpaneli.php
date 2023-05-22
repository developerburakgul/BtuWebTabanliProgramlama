<?php
require_once "config.php";

// if (isset($_COOKIE["adminGirisYapti"]) && $_COOKIE["adminGirisYapti"]=="1") {
    // kullanıcıyı kabul et
// }

// if (!isset($_COOKIE["AdminGirisYapti"]) || $_COOKIE["AdminGirisYapti"]!="1") {
    // // kullanıcıyı reddet
//     echo "Giriş yapamazsınız";
//     exit();
// }

if (!isset($_SESSION["AdminGirisYapti"]) || $_SESSION["AdminGirisYapti"]!="1") {
    // kullanıcıyı reddet
    echo "Giriş yapamazsınız";
    exit();
}
echo "Kontroller ... Çok Özel Bilgiler ...";

echo "<hr><a href = 'cikisyap.php'>Çıkış Yap</a>";

?>