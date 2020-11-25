<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-13-02</title>
  </head>
  <body>
        <?php

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          if ($b > $c) {
            $aux = $b;
            $b = $c;
            $c = $aux;
          }

          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c.";

        ?>
        <br><br>
        <a href="13-01.php">>> Volver</a>
  </body>
</html>