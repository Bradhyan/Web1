<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recogiendoInfo.php">
        <!-- action es una archivo de phyp que va a manipular la informacion escrita a traves del formulario

        Method (Recoge la informacion por medio de una variable super global, establece la forma en que se envia n los datos del formulario al servidor) hay posibilidades, GET recoge los datos enviados pero estos a su vez son visibles para el usuario a travez de la URL

        POST recoge los datos enviados pero estos no son visibles para el usuario, sino que directamente pasan a la base de datos
        -->

        <label for="">Nombres:</label><br>
        <input type="text" placeholder="Escribe aqui tu nombre"
        name="apellido"><br> <br>

        <label for="">Telefono</label><br>
        <input type="number" name="telefono" id="" placeholder="Escribe aqui tu #"><br><br>
        <label for="">Direccion:</label> <br>
        <input type="Text" name="Dirección"><br><br>

        <input type="submit".value="Enviar.Datos"> <!--el input Submit sirve para enviar los datos-->
        
    </form>
</body>
</html>