<?php

echo $_REQUEST['name']."</br>";
echo $_REQUEST['email']."</br>";
echo $_REQUEST['menssagem']."</br>";


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Working with Form</title>
    <style>
      fieldset input{
        width: 95%;
        margin-bottom: 10px;
      }
      fieldset textarea{
        width: 99%;
        margin-bottom: 10px;
      }
      fieldset{
        width: 400px;
      }
      legend{
        font-size: 26px;
      }

    </style>
  </head>
  <body>
      <form action="index.php" method="post">
        <fieldset>
          <legend>Sample Form</legend>
          <label>Nome:</label>
          <input type="text" name="name" value="<?= $_POST['name']?>">
          <label>Email:</label>
          <input type="text" name="email" value="<?= $_POST['email']?>">
          <label>Menssagem:</label>
          <textarea name="menssagem"><?= $_POST['menssagem']?></textarea>
        </fieldset>
        <input type="submit" value="submit">
      </fomr>
  </body>
</html>
