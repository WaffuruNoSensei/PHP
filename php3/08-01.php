<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_POST['n'])): ?> 
        Por favor, introduzca el número que quieres saber su tabla de multiplicar:
            <form action="08-01.php" method= "post">
                <input type= "number" name="n" min="0" max="10"> <br>
                <input type= "submit" value="Aceptar">
            </form>
    <?php else: ?>
        <table>
            <?php
                $n = $_POST['n'];
                echo "Tabla de multiplicar de $n <br><br>";
                for ($i = 0; $i < 11; $i++) {
                    $valor = $n * $i;
                    echo "<tr><td> $n x $i = $valor </td></tr>";
                }


            ?>

    <?php endif; ?>
</body>
</html>