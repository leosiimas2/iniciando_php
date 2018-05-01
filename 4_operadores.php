<?php
//concatenar, utilizar ponto (.) entre variaveis para concatenar.
echo "Concatenação: ";
$name="Leonardo";
$last_name="Abreu";
echo $name." ".$last_name."</br>";

//soma
echo "Soma: ";
$x = 10;
$y = 8;
echo $x + $y." ";
$x++; //$x = $x +1;
echo $x + $y." ";
$y+=3; //$y = $y +3;
echo $x + $y."</br>";

//subtração
echo "Subtração: ";
$x = 10;
$y = 8;
echo $x - $y." ";
$x--;
echo $x - $y." ";
$y-=3;
echo $x - $y."</br>";

//divisão
echo "Divisão: ";
$x = 10;
$y = 8;
echo $x / $y."</br>";

//multiplicação
echo "Multiplcação: ";
$x = 10;
$y = 8;
echo $x * $y."</br>";

//exponencial - introduzido no PHP 5.6
echo "Exponencial: ";
$x = 2;
$y = 2;
echo $x ** $y." ";
$y = 3;
echo $x ** $y."</br>";

//modulo
echo "Modulo: ";
echo 4 % 2." ";
echo 4 % 3." ";








 ?>
