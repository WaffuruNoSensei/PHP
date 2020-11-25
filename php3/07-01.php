<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>07</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 3;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }

          $numeroSecreto = 6969;

          if ($numeroIntroducido == $numeroSecreto) {
            echo "<h1>IT'S PAYDAY FELLAS</h1>.";
            echo '<img src="https://m.gifmania.com/Gif-Animados-Objetos/Imagenes-Dinero/Cajas-Fuertes/Caja-Fuerte-Lingotes-Oro-81890.gif"  alt="">';
          } elseif ($oportunidades == 0) {
            echo "<h1>IT DOESN'T WORK BAIN????????</h1>.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="07-01.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }
        ?>
  </body>
</html>