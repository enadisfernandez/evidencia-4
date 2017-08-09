<!--Algoritmo que pida dos numeros y muestre todos los numeros pares que van desde el primero al segundo.Se debe controlar que los valores son correctos.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 1</title>
  </head>
  <body>

      <h3>los numeros pares entre el 1er - 2do son:</h3>
      <?php
      $a=10;
      $b=20;

      for ($a=$a; $a<=$b ; $a++) {
        if (($a%2)==0) {
        echo "$a </br>";
        }

      }
      echo "Los valores són concretos";
     ?>
   <hr>
   <div class="col-2">
   <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
   </div>
 <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>

  </body>
</html>
