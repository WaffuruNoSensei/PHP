<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>T2-04-02</title>
  </head>
  <body>
    <form action="pruebas.php" method="post">
        <input type="number" name="nota1" min="0" max="10">
        <input type="number" name="nota2" min="0" max="10">
        <input type="number" name="nota3" min="0" max="10">
        <input type="submit" value="intro">
    </form>
        <?php
          $horasTrabajadas  = $_POST['horasTrabajadas'];

          if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas ;
          } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
          }

          echo "El sueldo semanal que le corresponde es de $sueldoSemanal euros";
        ?>
        <br><br>
        <a href="04-01.php">>> Volver</a>
  </body>
</html>