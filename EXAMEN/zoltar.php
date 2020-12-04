<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zoltar</title>
</head>

<body>
<h1>ZUELTAME LOS NÚMEROS</h1>
<?php
if(isset($_POST['number'])) {
   $number = $_POST['number'];
   $intentos = $_POST['intentos'] + 1;
   $zoltar = $_POST['zoltar'];
} else {
   $intentos = 0;
   $number = rand(1,100);
   $zoltar = 0;
}
?>

<p>Intenta adivinar un número entre 1 y 100.</p>
<form action="zoltar.php" method="post" name="zoltar">
    <label>Dame un número:</label><br/ >
    <input type="number" id="zoltar" name="zoltar" default="0"/>
    <input name="number" type="hidden" value="<?= $number ?>" />
    <input name="intentos" type="hidden" value="<?= $intentos ?>" />
    <input name="submit" type="submit" value="Prueba!" />
</form>



<?php
if($zoltar){

    $zoltar  = $_POST['zoltar'];
    $number  = $_POST['number'];
    $intentos = $_POST['intentos'];

    if ($zoltar > 100 || $zoltar < 1){ 
    	echo "<p> Pon un número en el rango de 1-100 </p>";
    }elseif($zoltar > $number){       
        echo "Intenta con un número más bajo.";
    }elseif($zoltar == $number){      
    	echo "<p>Victoriaaa!!! </p>";
        echo "<p>Has ganado ",round(1000/$intentos), " puntos!.</p>";
        echo "<form action='zoltar.php' method='post' name='new-number'>
        <input name='submit' type='submit' value='Nuevo Juego' />
    </form>";
    }
    elseif($zoltar < $number)
    {
        echo "Intenta con un número más alto.";
    }
}
?>

    <footer>
        <p>José Antonio Pérez Tinajero Examen PHP 2º DAW</p>
    </footer>
</body>
</html>
