<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-12-02.php</title>
  </head>
  <body>
        <?php
          $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'] + $_POST['r6'] + $_POST['r7'] +$_POST['r8'] +$_POST['r9'] + $_POST['r10'];
          echo "Ha obtenido $puntos puntos.";
        ?>
        <br><br>
        <a href="12-01.php">>> Volver</a>
  </body>
</html>