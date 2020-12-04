<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muestra cartas</title>
  <link rel="stylesheet" href="examen.css">
</head>

<body>
  <h1>Muestra cartas Index</h1>

  <form action="muestraCartas.php" method="get">
    <p>Elija un número de cartas y un palo.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de cartas:</strong></td>
          <td><input type="number" name="cantidad" min="3" max="12" value="7">
            <select name="palo">
              <option value="c">Corazones</option>
              <option value="d">Diamantes</option>
              <option value="t">Tréboles</option>
              <option value="p">Picas</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Contar">
      <input type="reset" value="Borrar">
    </p>
  </form>



  <footer>
        <p>José Antonio Pérez Tinajero Examen PHP 2º DAW</p>
    </footer>

</body>
</html>