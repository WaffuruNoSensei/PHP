<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-10-02</title>
  </head>
  <body>
        <?php
          $mes = strtolower($_POST['mes']);
          $dia = $_POST['dia'];

          switch($mes) {
            case (($mes == 1) || ($mes === "enero")):
              if ($dia < 21) {
                $horoscopo = "capricornio";
              } else {
                $horoscopo = "acuario";
              }
              break;

            case (($mes == 2) || ($mes === "febrero")):
              if ($dia < 20) {
                $horoscopo = "acuario";
              } else {
                $horoscopo = "piscis";
              }
              break;

            case (($mes == 3) || ($mes === "marzo")):
              if ($dia < 21) {
                $horoscopo = "piscis";
              } else {
                $horoscopo = "aries";
              }
              break;

            case (($mes == 4) || ($mes === "abril")):
              if ($dia < 21) {
                $horoscopo = "aries";
              } else {
                $horoscopo = "tauro";
              }
              break;

            case (($mes == 5) || ($mes === "mayo")):
              if ($dia < 20) {
                $horoscopo = "tauro";
              } else {
                $horoscopo = "géminis";
              }
              break;

            case (($mes == 6) || ($mes === "junio")):
              if ($dia < 22) {
                $horoscopo = "géminis";
              } else {
                $horoscopo = "cáncer";
              }
              break;

            case (($mes == 7) || ($mes === "julio")):
              if ($dia < 22) {
                $horoscopo = "cáncer";
              } else {
                $horoscopo = "Leo";
              }
              break;

            case (($mes == 8) || ($mes === "agosto")):
              if ($dia < 24) {
                $horoscopo = "leo";
              } else {
                $horoscopo = "virgo";
              }
              break;

            case (($mes == 9) || ($mes === "septiembre")):
              if ($dia < 23) {
                $horoscopo = "virgo";
              } else {
                $horoscopo = "libra";
              }
              break;

            case (($mes == 10) || ($mes === "octubre")):
              if ($dia < 23) {
                $horoscopo = "libra";
              } else {
                $horoscopo = "escorpio";
              }
              break;

            case (($mes == 11) || ($mes === "noviembre")):
              if ($dia < 23) {
                $horoscopo = "escorpio";
              } else {
                $horoscopo = "sagitario";
              }
              break;

            case (($mes == 12) || ($mes === "diciembre")):
              if ($dia < 21) {
                $horoscopo = "sagitario";
              } else {
                $horoscopo = "capricornio";
              }
              break;
          }

          echo "Su signo del zodiaco es ", $horoscopo;
        ?>
        <br><br>
        <a href="10-01.php">>> Volver</a>
  </body>
</html>