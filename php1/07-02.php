<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

      $Base=round($_POST['baseImponible'] * 1.21, $precision = 2);
      echo "El total de la factura es ";
      echo "{$Base} euros";
    ?>
  </body>
</html>