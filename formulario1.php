<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulario GET</h3>
    <form action="recogerinfo.php" method="GET">
        <!--action es un archivo de php que va a manipular la informacion escrita a traves del formulario-->
        <!--method(recoge la informacion por medio de una variable super globlal, establece la forma en que se envian los datos del formulario al servidor) hay dos posibildades, GET recoge los datos enviados pero estos a su vez son visibles para el usuario a traves de la URL-->
        <!--POST recoge los datos enviados pero estos no son visibles para el usuario, sino que directamente pasan a la base de datos-->
        <label for="">Nombres:</label> <br>
        <input type="text" placeholder="Escribe aquí tu nombre" name="nombre"> <br><br>
        <!--el atributo name permite obtener la informacion digitada en este espacio-->
        <label for="">Apellidos:</label><br>
        <input type="text" placeholder="Escribe aquí tus apellidos" name="apellido"> <br> <br>
        <label for="">Telefono:</label> <br>
        <input type="number" name="telefono" id="" placeholder="Escribe aquí tu #" > <br> <br>
        <label for="">Dirección:</label> <br> 
        <input type="text" name="direccion" placeholder="Escribe aquí tu direccion"> <br>
         <br>
         <input type="submit" value="Enviar Datos">


    </form>
</body>
</html>