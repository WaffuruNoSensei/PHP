<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muestra cartas 2</title>
  <link rel="stylesheet" href="examen.css">
</head>

<body>
 
  <h1>Muestra cartas</h1>

  <?php
    if (!isset($_GET['cantidad'])) {
      if (!isset($_GET['palo'])) {
        echo "<p class='aviso'>No accedas a la segunda página directamente sin pasar por el formulario!!!!</font></p>";

      }
      echo "<p class='aviso'>No está colocada la cantidad de cartas</p>";
    }
  ?> 
  <?php if (isset($_GET['cantidad'])) {

    echo "<h2>". $_GET['cantidad'] . " cartas</h2>";

   
    $palo = $_GET['palo'];
    $repartimos = [];
    for ($i = 0; $i<$_GET['cantidad'];$i++)
    {
        $repartimos[$i] = rand(1,10);
    }



    echo "<p>";

   for ($i = 0; $i<$_GET['cantidad'];$i++)
   {
    echo "<img src='img/{$palo}{$repartimos[$i]}.svg' alt='$repartimos[$i]' width='100'>";
   }

  echo "</p>";

  echo "<p>";
  $hay = false;
  for ($i = 0; $i<($_GET['cantidad']-1);$i++)
  {
    if ($repartimos[$i] == $repartimos[$i+1])
    {
      $hay=true;
    }
  }

  if ($hay==true)
  {
    echo "Hay cartas iguales seguidas";
  }
  else
  {
    echo "No hay cartas iguales seguidas";
  }

  
  echo "</p>";
}
?>
  <p><a href="muestraCartasform.php">Volver al formulario.</a></p>


  <footer>
        <p>José Antonio Pérez Tinajero Examen PHP 2º DAW</p>
    </footer>

</body>
</html>
