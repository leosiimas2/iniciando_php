<?php

/*$i=0;

while($i < 10){

echo $i."</br>";

$i++;

}
*/
?>

<h1>Repeat Loop</h1>

<h3>Using While</h3>
<ul>
    <?php
        $i=0;
        while($i<10){
    ?>

        <li>List <?php echo $i; ?></li>
    <?php
        $i++;
        }
    ?>
</ul>
