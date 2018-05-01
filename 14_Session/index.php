<?php

session_start();


$login = "admin";
$password = "12345";

if($login == "admin" && $password == "12345"){
    $_SESSION['login'] = true;
    echo "Sucesso";
}else {
    echo "Error!";
}
?>

<a href="secret.php">Get in</a>
