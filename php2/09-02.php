<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-09-02</title>
  </head>
  <body>
        <?php
          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];



          if (($a == 0) && ($b == 0) && ($c == 0)) {

          // 0x^2 + 0x + 0 = 0
            echo  "La ecuación tiene infinitas soluciones.";
          }
          elseif (($a == 0) && ($b == 0) && ($c != 0)) {

          // 0x^2 + 0x + c = 0  con c distinto de 0
            echo  "La ecuación no tiene solución.";
          }

          elseif (($a != 0) && ($b != 0) && ($c == 0)) {

          // ax^2 + bx + 0 = 0  con a y b distintos de 0
            echo  "x<sub>1</sub> = 0";
            $X = (-$b / $a);
            echo  "<br>x<sub>2</sub> = {$valorX}" ;
            $valorX = sqrt($X);
            echo "x = {$valorX}";

          }

          elseif (($a == 0) && ($b != 0) && ($c != 0)) {

          // 0x^2 + bx + c = 0  con b y c distintos de 0
                $valorX = (-$c / $b);
                echo  "x<sub>1</sub> = {$valorX}";
          }

          else {

          // ax^2 + bx + c = 0  con a, b y c distintos de 0

            $discriminante = ($b * $b) - (4 * $a * $c);

            if ($discriminante < 0) {
              echo  "La ecuación no tiene soluciones reales";
            } else {
              $positivo = (-$b + sqrt($discriminante)) / (2 * $a);
              $negativo = (-$b - sqrt($discriminante)) / (2 * $a);
              echo  "x<sub>1</sub> = {$positivo}";
              echo  "<br>x<sub>2</sub> = {$negativo}";
            }
          }
        ?>
        <br><br>
        <a href="09-01.php">>> Volver</a>
  </body>
</html>