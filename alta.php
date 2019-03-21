<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
  </head>
  <body>
    <?php
      $nombre = $_POST['nombre'];
      $apellidoP = $_POST['apaterno'];
      $apellidoM = $_POST['amaterno'];
      $email = $_POST['email'];

      echo "Hola: ", $nombre;
      echo " ", $apellidoP;
      echo " ", $apellidoM;
      echo "<br>";
      echo "Tu email es: ", $email;
    ?>
  </body>
  <br>
  <a href="formulario.html">Regresar</a>
</html>
