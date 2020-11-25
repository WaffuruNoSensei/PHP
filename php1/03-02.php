<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-02</title>
</head>
<body>
    <?php 
        $pesetas = $_POST['x'];
        $euros=round($pesetas/166.386,2);
        echo  "{$pesetas} son {$euros} euro";
    ?>
</body>
</html>