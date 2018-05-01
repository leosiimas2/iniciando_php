<?php



function nameFunction($p){
  //action
  //return
}

function calculadora($num,$num2,$op){

      if($op == "+"){
        return $num + $num2;
      }elseif($op == "-"){
        return $num - $num2;
      }elseif ($op == "*"){
        return $num * $num2;
      }elseif ($op == "/") {
        return $num / $num2;
      }else {
        return "Error!";
      }

}


echo calculadora(4,5,"+")."</br>";
echo calculadora(10,5,"-")."</br>";
echo calculadora(4,5,"*")."</br>";
echo calculadora(16,8,"/")."</br>";
echo calculadora(4,7,"8")."</br>";

$var = calculadora(4,7,"*");
echo $var;


?>
