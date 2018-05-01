<?php

//setcookie("name","Leo")
//setcookie("color","red",time()+3600*24*7*4*12);

echo "hello"." ".$_COOKIE['name'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="<?= $_COOKIE['color'] ?>">

  </body>
</html>
