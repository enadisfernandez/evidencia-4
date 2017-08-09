<!--Algoritmo que pida dos numeros y sume todos los numeros que van desde el primero al segundo.Se debe controlar que los valores son concretos.-->
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/style.css">
          <title>Ejercicio 3</title>
        </head>
        <body>
         <h3>La suma de los numeros que van desde el primero al segundo es:</h3>
         <?php
        $a=1;
        $b=10;
        $suma=0;

           if ($a <= $b) {
             for ($a=$a; $a <=$b ; $a++) {
                 $suma=$suma+$a;
          }
          echo "$suma </br>";
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
