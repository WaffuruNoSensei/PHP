<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $megab = $_POST['mb'];
      $kilob = $_POST['mb']*1024;

      echo "{$megab} Mb son {$kilob} Kb.";
    ?>
    <br><br>
    <a href="10-01.php">>> Volver</a>
  </body>
</html>