<?php
require_once "config.php";
require_once "config.php";

if (isset($_POST["adminname"]) && isset($_POST["adminpass"])) {
    $adminname = $_POST["adminname"];
    $adminpass = $_POST["adminpass"];

    // kontrol
    $flag=false;

    foreach ($admins as $adm_name => $adm_pass) {
        if ($adminname==$adm_name) {
            if ($adminpass==$adm_pass) {
                
                // giriş yapıldı
                $flag=true;
            }
            break;
        }
    }

    if ($flag) {
        // setcookie("AdminGirisYapti","1",time()+60);
        $_SESSION["AdminGirisYapti"]="1";

        
        echo "Hoşgeldiniz Sn. " . $adminname;
    } else {
        echo "Hatalı Giriş";
    }

    
} else {
    ?>
    
<form action="giris.php" method="post" >
    Yönetici Adi:<input name="adminname"> <br>
    Yönetici Sifre:<input name="adminpass" type="password"> <br>
    <button type="submit">Giriş Yap</button>
</form>

<?php
}
?>
