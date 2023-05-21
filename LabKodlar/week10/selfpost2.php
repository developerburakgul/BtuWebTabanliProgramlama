<?php
if( isset($_POST['adsoyad']) || isset($_POST['numara']))
{
    echo "Merhaba, ". $_POST['adsoyad']. "<br />";
    echo "Numaranızı ". $_POST['numara']. " olarak girdiniz.";
    exit();
}


echo '
<html>
<body>
    <form action="'.$_SERVER['PHP_SELF'].'" method="POST">
        Adı Soyadı: <input type="text" name="adsoyad" /> <br />
        Numarası : <input type="text" name="numara" /> <br />
        <input type="submit" value="Gönder"/>
    </form>
</body>
</html>
';
