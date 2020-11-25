<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-02</title>
</head>
<body>
    <?php 
        $euros = $_POST['x'];
        $pesetas=$euros*166.386;
        echo  "{$euros} son {$pesetas} pesetas";
    ?>
</body>
</html>