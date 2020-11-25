<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-03-01</title>
  </head>
  <body>
        <?php
          $puntos = 0;

          foreach($_POST as $respuesta) {
            $puntos += $respuesta;
          }

          // Muestra el resultado del test

          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
          }

          if ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
          }

          if ( $puntos >= 22 ) {
            echo "Tu pareja se ha cansado de ti igual porque eres un puto o una puta subnormal igual deberías de confiar en ella y dejar de mirar su puto móvil y ser un poco mejor para ella o igual el puto subnormal es él o ella";
          }

        ?>
        <br><br>
        <a href="15-01.php">>> Volver</a>
  </body>
</html>