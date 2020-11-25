<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

      $Area=round($_POST['ancho'] * $_POST['alto'], $precision = 2);
      echo "El área del rectángulo es ";
      echo "{$Area} cm<sup>2</sup>";
    ?>
  </body>
</html>