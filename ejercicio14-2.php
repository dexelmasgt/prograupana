<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Segunda pagina</title>
  </head>
  <body>
    
    <?php 
        $a = $_POST['num1'];
        $b = $_POST['num2'];

        if ($a==$b) {
            echo "Los numeros que ingresaste son iguales, por favor ingresa dos numeros diferentes.";
            echo "</br>";
            echo "<a href='ejercicio14.php'>Regresar</a>";
        }else {
            if ($a>$b) {
                echo "El mayor de los que ingresaste es: ".$a;
                echo "</br>";
                echo "El menor de los que ingresaste es: ".$b;   
            }else { 
                echo "El mayor de los que ingresaste es: ".$b;
                echo "</br>";
                echo "El menor de los que ingresaste es: ".$a; 
            }
        }

        //CODIGO PARA QUE SUME LOS DOS NUMEROS
        $suma = $a+$b;
        echo "</br>";
        echo "La suma de los dos numeros que ingresaste es:";
        echo $suma;

        echo "</br>";
        echo "<a href='ejercicio14.php'>Regresar</a>";   
    ?>
    
  </body>
</html>
