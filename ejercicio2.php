<!--Algoritmo que pida dos numeros y muestre todos los numeros impares que van desde el primero al segundo.
Se debe controlar que los valores sean concretos-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <h3>Los numeros impares entre el 1er - 2do són:</h3>
    <?php
    $a=1;
    $b=10;

    for($a=$a; $a<=$b;$a++){
     if (($a%2)==1) {
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
