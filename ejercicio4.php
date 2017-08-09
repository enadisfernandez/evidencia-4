<!--Algoritmo que pida dos numeros y multiplique todos los numeros que van desde el primero al segundo.Se debe controlar que los valores son correctos.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 4</title>
  </head>
  <body>
   <h3>La multiplicación de los numeros que van desde el primero al segundo es:</h3>
   <?php
  $a=1;
  $b=10;
  $multiplicacion=1;

     if ($a <= $b) {
       for ($a=$a; $a <=$b ; $a++) {
           $multiplicacion=$multiplicacion*$a;
    }
    echo "$multiplicacion </br>";
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
