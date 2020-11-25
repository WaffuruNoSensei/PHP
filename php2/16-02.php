<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-016-02</title>
  </head>
  <body>
        <?php
            $n = $_POST['n'];
            $cifra  = $n %10;
            echo "La última cifra de {$n} es {$cifra}";
        ?>
        <br><br>
        <a href="16-01.php">>> Volver</a>
  </body>
</html>