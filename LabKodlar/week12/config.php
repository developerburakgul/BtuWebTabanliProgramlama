<?php

$db_host = "localhost";
$db_user= "root";
$db_password = "";
$db_name = "WTP";


$db=mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    mysqli_connect_error();
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo "Connection Successful <br>" ;
}







?>