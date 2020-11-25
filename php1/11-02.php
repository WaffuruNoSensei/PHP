<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $kilob = $_POST['kb'];
      $megab = $_POST['kb']/1024;

      echo "{$kilob} Kb son {$megab} Mb.";
    ?>
    <br><br>
    <a href="10-01.php">>> Volver</a>
  </body>
</html>