<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pares o nones</title>
  <link rel="stylesheet" href="examen.css">
  
</head>

<body>
  <h1>Pares o nones</h1>

    <?php 
        $jugador1= rand(0,5);
        $jugador2= rand(0,5);
    ?>

  <table>
    <tr>
      <th colspan="2">Jugador 1<br>(pares)</th>
      <th colspan="2">Jugador 2<br>(nones)</th>
    </tr>
    <tr>
        <?php
            $ganador = $jugador1 + $jugador2;
            if ($ganador%2)
            {
                echo '<td><img src="img/pierde.svg" alt="Pierde" height="100"></td>';
            }
            else {
                echo '<td><img src="img/gana.svg" alt="Gana" height="100"></td>';
            }
        ?>
    
      <td><img src="img/<?= $jugador1 ?>.svg" alt="<?= $jugador1 ?>" height="200"></td>
      <td><img src="img/<?= $jugador2 ?>.svg" alt="<?= $jugador2 ?>" height="200"></td>
      <?php
            if ($ganador%2)
            {
                echo '<td><img src="img/gana.svg" alt="Gana" height="100"></td>';
            }
            else {
                echo '<td><img src="img/pierde.svg" alt="Pierde" height="100"></td>';
            }
        ?>
    </tr>
  </table>
  <?php
    echo "<form action='paresynones.php' method='post' name='new-number'>
        <input name='submit' type='submit' value='Nuevo Juego' />
        </form>";
    ?>
    <footer>
        <p>José Antonio Pérez Tinajero Examen PHP 2º DAW</p>
    </footer>
</body>
</html>