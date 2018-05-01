<?php
session_start();

if($_SESSION['login']){
    echo "Secret Area";
}else{
  echo "Login Incorreto";
}

unset($_SESSION['login']);

?>
