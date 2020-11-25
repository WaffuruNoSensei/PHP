<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-06-02</title>
  </head>
  <body>
        <?php
          $h = $_POST['h'];
          $g = 9.81;
          $s = round(sqrt((2 * $h) / $g), $precision = 2);

          echo "El objeto tarda {$s} segundos en caer.";
        ?>
        <br><br>
        <a href="06-01.php">>> Volver</a>
  </body>
</html>