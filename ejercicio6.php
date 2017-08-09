<!--Algoritmo que mjuestre la tabla de multiplicar de un numero cualquiera. -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h3>La tabla de multiplicar es:</h3>

    <?php

    $v=2;

      for ($i=0; $i <=10 ; $i++) {
        echo " $v x $i = ".($v*$i)."</br>";
      }

     ?>
     <hr>
     <div class="col-2">
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     </div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
