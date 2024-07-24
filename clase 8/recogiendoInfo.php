<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Datos enviados desde el formulario</h3>

    <p>Hola, tu nombres es</p> <?php  echo $_GET['nombre'];?> <br>
    <p>Tu dirección es: </p> <?php  echo $_GET['Dirección']?> <br>
    <p>Tu número telefonico es: </p> <?php  echo $_GET['telefono']?> <br>

    <button> <a href="formulario1.php">Regresar al formulario</a>
</button>
</body>
</html>