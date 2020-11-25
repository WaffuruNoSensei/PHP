<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "El volumen del cono es ";
      $v =round((1 / 3) * 3.1416 * $_POST['r'] * $_POST['r'] * $_POST['h'],$precision=2);
      echo"{$v} cm<sup>2</sup>.";
    ?>
    <br><br>
    <a href="09-01.php">>> Volver</a>
  </body>
</html>