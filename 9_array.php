<?php


$var1 =array(0=>"cat", 1=>"dog", 3=>"red", 2=>"blue");
$var2 = array("color"=>"red","value"=>43);


//print_r

print_r($var1);
echo "</br>";

//var_dump
var_dump($var1);
echo "</br>";



// for laço de repetição
for ($i=0; $i < 4 ; $i++) {
  echo $var1[$i]."</br>";
}


// foreach percorre cada item do array

foreach ($var1 as $key => $value) {
  echo $key." => ".$value."</br>";
}

foreach ($var2 as $key => $value) {
  echo $key." => ".$value."</br>";
}


?>
