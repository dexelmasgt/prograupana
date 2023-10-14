<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Estructura IF</title>
  </head>
  <body>
    
    <?php
      $a = 2;
      $b = 3;
      
      //Aqui estamos preguntando si a es mayor que b
      if ($a > $b) {
        echo "a es mayor que b";
      //Aqui estamos preguntando si a es igual que b
      } elseif ($a == $b) {
        echo "a es igual a b";
      //Aqui estamos preguntando si b es mayor que a
      } else {
        echo "b es mayor que a";
      }

      echo "</br>";
      echo $b;
    ?>
    
</body>
</html>