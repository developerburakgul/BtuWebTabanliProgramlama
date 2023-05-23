<?php
require_once("config.php");

if(isset($_POST["username"])){
    
    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    $form_email = $_POST["email"];

    $passlen=strlen($form_password);
    if ($passlen<6 || $passlen>15){
        echo "Şifre 6 ile 15 karakter arasında olmalıdır.";
        exit();
    }

    $form_password_hash = hash("sha256",$form_password);

    $rt=mysqli_query($db,"INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$form_username', '$form_password_hash', '$form_email')");

    if(mysqli_connect_errno()!=0){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    echo "Kayıt Başarılı <br>";
    echo "Giriş Yapmak için <a href='login.php'>tıklayınız</a>";






}else {
    

?>


<form action="signup.php" method="post">

Kullanici Adi: <input type="text" name="username" ><br>
Şifre : <input type="password" name="password" ><br>
Eposta : <input type="email" name="email" ><br>


<button type="submit">Kayıt Ol</button>



</form>

<?php
}
?>