<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-05-02</title>
  </head>
  <body>
        <?php
          $a = $_POST['a'];
          $b = $_POST['b'];

          $valorX = (-$b / $a);
          if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
          } else {
            echo "x = {$valorX}";
          }
        ?>
        <br><br>
        <a href="05-01.php">>> Volver</a>
  </body>
</html>