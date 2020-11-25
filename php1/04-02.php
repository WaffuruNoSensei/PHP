<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-02</title>
</head>
<body>
    <?php 

        $x = $_POST['x'];
        $y = $_POST['y'];
        $suma= $x+$y;
        $resta=$x-$y;
        $multiplicar=$x*$y;
        $dividir=$x/$y;
        echo "{$x} + {$y}  =  {$suma} <br>";
        echo "{$x} - {$y}  =  {$resta} <br>";
        echo "{$x} * {$y}  =  {$multiplicar} <br>";
        echo "{$x} / {$y}  =  {$dividir} <br>";
    ?>
</body>
</html>