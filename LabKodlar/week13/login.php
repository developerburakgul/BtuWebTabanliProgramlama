<?php
require_once("config.php");


if (isset($_POST["username"])) {    

    $form_username = $_POST["username"];

    $form_password = $_POST["password"];
    $form_password_hash = hash("sha256",$form_password);

    $q=mysqli_query($db,"SELECT * FROM `users` WHERE `username` = '$form_username' AND  `password` = '$form_password_hash' ");

    $num=mysqli_num_rows($q);// q sorgusundan kaç tane veri geldi ona bakar
    
    if ($num==0) {
        echo "Kullanıcı adı veya şifre hatalı";
        exit();
        
    }else if ($num==1){
        $user=mysqli_fetch_assoc($q);
        echo "Giriş Başarılı" . "Hoş geldiniz " . $user["name"] . "... <br>";
        exit();
    }



} else {
    # code...




?>



<form action="login.php" method="post">

Kullanici Adi: <input type="text" name="username" ><br>
Şifre : <input type="password" name="password" ><br>



<button type="submit">Giriş Yap</button>



</form>
<?php
}
?>