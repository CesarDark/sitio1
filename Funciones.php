<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FUNCIONES</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Days+One">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="centrar">
      <?php
        echo "*** FUNCIONES ***";
        echo "<br/>";
        echo "----------------------";
        echo "<br/><br/>";

        echo "# CÁLCULO #";
        echo "<br/>";
        echo "----------------";
        echo "<br/>";
        function suma($a, $b){
          $suma = $a + $b;
          echo "Suma de $a + $b es: ", $suma;

          echo "<br/>";
          $suma = $a - $b;
          echo "Resta de $a - $b es: ", $suma;
          echo "<br/><br/><br/>";
        }
        suma(15, 5);

        echo "# LONGITUD #";
        echo "<br/>";
        echo "------------------";
        echo "<br/>";
        function Millas_Km($milla, $km){
          $const = 1.60934;
          $result = $milla * $const;
          echo $milla ." Millas son: ", $result ." Km";

          echo "<br/>";
          $result = $km / $const;
          echo $km ." Km son: ", $result ." Millas";
          echo "<br/><br/><br/>";
        }
        Millas_Km(60, 100);

        echo "# TEMPERATURA #";
        echo "<br/>";
        echo "----------------------";
        echo "<br/>";
        function Grados_FC($Fahr, $cel){
          $result = $Fahr - 32;
          $result = $result * 5/9;
          echo $Fahr ."° Fahrenheit son: ", $result ."° Celcius";

          echo "<br/>";
          $result = $cel * 9/5;
          $result = $result + 32;
          echo $cel ."° Celcius son: ", $result ."° Fahrenheit";
          echo "<br/><br/><br/>";
        }
        Grados_FC(77, 25);

        echo "# MASA #";
        echo "<br/>";
        echo "-----------";
        echo "<br/>";
        function Libras_Gramos($libra, $gramos){
          $const = 453.592;
          $result = $libra * $const;
          echo $libra ." Libra(s) son: ", $result ." gramos";

          echo "<br/>";
          $const = 453.592;
          $result = $gramos / $const;
          echo $gramos ." Gramo(s) son: ", $result ." libras";
          echo "<br/><br/>";
        }
        Libras_Gramos(1, 500);

        function Onzas_Gramos($onza, $gramos){
          $const = 28.3495;
          $result = $onza * $const;
          echo $onza ." Onza(s) son: ", $result ." gramos";

          echo "<br/>";
          $const = 28.35;
          $result = $gramos / $const;
          echo $gramos ." Gramo(s) son: ", $result ." onzas";
          echo "<br/><br/><br/>";
        }
        Onzas_Gramos(5, 150);
      ?>
    </div>
      <footer>
        <p>&copy; #Cesar Rebollar 2019</p>
      </footer>
  </body>
</html>
