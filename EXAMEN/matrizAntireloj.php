<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <?php
        $numeroFilas = $numerosColumnas = 12;
        $fila = $columna = 11;

        echo "<p> MATRIZ ORIGINAL </p>";
        echo "<table>";
        for ($i = 0; $i < $numeroFilas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $numerosColumnas; $j++) {
                $array[$i][$j] = rand(0, 999);
                echo "<td>" . $array[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
            echo "</table>";

        echo "<p> MATRIZ ROTADA </p>";
        
        for ($i=0; $i < $numeroFilas; $i++)
        { 
            for ($j=0; $j < $numerosColumnas; $j++)
            { 
                if (($j - $i) >= 0 && ($i + $j) <$columna)
                {
                    $nuevoArray[$i][$j] = $array[$i][$j + 1];
                }
                elseif (($j - $i) > 0 && ($i + $j) >= $columna)
                {
                    $nuevoArray[$i][$j] = $array[$i + 1][$j];
                }
                elseif (($j - $i) <= 0 && ($i + $j) > $columna)
                {
                    $nuevoArray[$i][$j] = $array[$i][$j - 1];
                }
                else
                {
                    $nuevoArray[$i][$j] = $array[$i - 1][$j];
                }
            }
        }
        echo "<br>";
        echo "<table>";
        for ($i = 0; $i < count($array); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($array); $j++) {
                echo "<td>" . $nuevoArray[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
            echo "</table>";

    ?>

    <footer>
        <p>José Antonio Pérez Tinajero Examen PHP 2º DAW</p>
    </footer>
</body>
</html>
