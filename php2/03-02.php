<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-03-02</title>
  </head>
  <body>
        <?php
          $n = $_POST['n'];

          switch($n) {
            case 1:
              $dia  = "Hoy es Lunes";
              break;
            case 2:
              $dia  = "Hoy es Martes";
              break;
            case 3:
              $dia  = "Hoy es Miércoles";
              break;
            case 4:
              $dia  = "Hoy es Jueves";
              break;
            case 5:
              $dia  = "Hoy es Viernes";
              break;
            case 6:
              $dia  = "Hoy es Sábado";
              break;
            case 7:
              $dia  = "Hoy es Domingo";
              break;
            default:
              $dia  = "Debe introducir un número del 1 al 7";
          }

          echo $dia;
        ?>
        <br><br>
        <a href="03-01.php">>> Volver</a>
  </body>
</html>