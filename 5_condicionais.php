<?php

// Calculadora com PHP

$value1 = 3;
$value2 = 5;
$operator = "y";


//teste de operação


if($operator == "+"){
  echo "Soma = ".($value1 + $value2);

}elseif($operator == "-"){
  echo "Subtração = ".($value1 - $value2);
}elseif($operator == "/"){
  echo "Divisão = ".($value1 / $value2);
}elseif($operator == "*"){
  echo "Multiplicação = ".($value1 * $value2);
}else {
  echo "Operador não existe";
}

?>
