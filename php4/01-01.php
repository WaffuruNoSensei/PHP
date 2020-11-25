<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T4-01.php</title>
  </head>
  <body>
    <?php
      for ($i = 0; $i < 20; $i++) {
          $numero[] = rand(0,100);
      }

      foreach ($numero as $elemento) {
          $cuadrado[] = $elemento * $elemento;
          $cubo[] = $elemento * $elemento * $elemento;
      }

    ?>
      <table>
      <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
    <?php
      for ($i = 0; $i < 20; $i++) {
          $numeroprint = $numero[$i];
          $cuadradoprint = $cuadrado[$i];
          $cuboprint = $cubo[$i];
          echo "<tr><td> $numeroprint </td>";
          echo "<td> $cuadradoprint </td>";
          echo "<td> $cuboprint </td></tr>";
      }
    ?>
      </table>
  </body>
</html>