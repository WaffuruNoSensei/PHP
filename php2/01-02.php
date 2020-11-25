<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-01-02.php</title>
  </head>
  <body>
        <?php
          $dia = strtolower($_POST['dia']);

          switch($dia) {
            case "lunes":
              echo "Desarrollo Web en Entorno Cliente";
              break;

            case "martes":
              echo "Empresa";
              break;

            case "miércoles":
              echo "Desarrollo Web en Entorno Servidor";
              break;

            case "jueves":
              echo "Despliegue de Aplicaciones Web";
              break;

            case "viernes":
              echo "Diseño de Interfaces Web";
              break;

            case "sábado":
                echo "¡Ese día no hay clase!";
              break;

            case "domingo":
              echo "¡Ese día no hay clase!";
              break;

            default:
              echo "El día introducido no es correcto.";
          }
        ?>
        <br><br>
        <a href="01-01.php">>> Volver</a>
  </body>
</html>