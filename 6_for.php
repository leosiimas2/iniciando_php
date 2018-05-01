<?php

for ($i = 0; $i<=10; $i++){
  echo "list ".$i."</br>";
}
?>

<h1>Repeat Loop</h1>

<h3>Using For</h3>

<ul>
    <?php
    for ($i = 0;$i<20 ;$i):
        ?>
        <li>Lista <?= $i ?></li>
        <?php
    endfor;
   ?>

</ul>
