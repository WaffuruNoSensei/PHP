<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php if (!isset($_POST["n"])): ?>
                Introduzca un número entero y le diré cuántos dígitos tiene:
                <form action="09-01.php" method="post">
                <input type="number" name="n" autofocus>
                <input type="submit" value="Aceptar">
                </form>
        <?php else: ?>
            <?php
            $n = $_POST['n'];
            $numeroIntroducido = $n;
            $numeroDeDigitos = 1;

            while ($n > 9) {
                $n = floor($n / 10);
                $numeroDeDigitos++;
                }
                if ($numeroDeDigitos==1)
                { 
                    echo "$numeroIntroducido tiene $numeroDeDigitos dígito.";
                }
                else{
                echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
                }
            ?>
            <br><br>
            <a href="09-01.php">>> Volver</a>

        <?php endif; ?>
</body>
</html>