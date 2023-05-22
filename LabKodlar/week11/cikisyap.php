<?php
require_once "config.php";
// setcookie("AdminGirisYapti","0",time()-60);
$_SESSION["AdminGirisYapti"]="0";
// unset();
session_destroy();


?>