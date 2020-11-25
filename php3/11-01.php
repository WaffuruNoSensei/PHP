<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_POST['n'])) {?>
    Por favor, introduce un número entero: <br>
    <form action="11-01.php" method="post">
        <input type="number" name="n" autofocus>
        <input type="submit" value="aceptar">
    </form>
<?php } else {
    $n = $_POST['n'];
    echo "<table><tr><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
    for ($i = $n;$i < $n + 5;$i++)
    {
        $cuadrado = $i*$i;
        $cubo = $i*$i*$i;
        echo "<tr><td>$i</td><td>$cuadrado</td><td>$cubo</td></tr>";
    }
    echo "</table>";
    echo '<br><a href="11.php"> Volver </a>';
}
?>
</body>
</html>