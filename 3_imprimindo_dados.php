<?php


$title = "User:";
$name = "Leonardo";
$last_name = "Abreu";
$idade = 22;
$email = "user@teste.com";

?>

<h1><?= $title ?> </h1>

<ul>

  <li>Name: <?= $nome." ".$last_name; ?></li>
  <li>Idade: <?php echo $idade;?></li>
  <li>E-mail: <?php echo $email;?></li>

</ul>
