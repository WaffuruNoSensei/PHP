<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $salario = $_POST['horas'] * 12;
      echo "Su salario semanal es ";
      echo "{$salario} euros.";
    ?>
    <br><br>
    <a href="08-01.php">>> Volver</a>
  </body>
</html>