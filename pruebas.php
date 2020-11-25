<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="pruebas.php" method="POST">
        <input type="number" name="nota1" min="0" max="10">
        <input type="number" name="nota2" min="0" max="10">
        <input type="number" name="nota3" min="0" max="10">
        <input type="submit" value="Intro">
    </form>

    <?php if(isset($_POST['nota1'])): {
        $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3;
        echo "La nota media es ";
        echo round($media, $precision = 2);
        echo ", en el boletín tiene un ";

        if ($media < 5) {
            echo "Insuficiente.";
        } 
        elseif (($media >= 5) && ($media<6))
        {
            echo "Suficiente.";
        }
        elseif (($media >= 6) && ($media < 7))
        {
            echo "Bien.";
        }
        elseif (($media >= 7) && ($media<9))
        {
            echo "Notable.";
        }
        elseif ($media >= 9)
        {
            echo "Sobresaliente.";
        }
    }
    ?>

    <?php endif; ?>
    <br><br>
    <a href = "ejercicio1.html"> Esto es un placeholder </a>
</body>
</html>