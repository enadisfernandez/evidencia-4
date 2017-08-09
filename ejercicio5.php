<!--Algoritmo que pida un numero y muestre en pantalla el mismo numero de asteriscos.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <h3>El numero es asteriscos es:</h3>
    <?php
    $a=8;

    for ($i=1; $i <=$a ; $i++) {
      echo "*";
    }
     ?>
     <hr>
     <div class="col-2">
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     </div>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
