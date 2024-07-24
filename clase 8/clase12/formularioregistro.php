<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro Cliente</title>
</head>
<body>
    
<h1>Formulario de registro Cliente</h1>

<form action="formularioregistro.php" method="POST"></form>
<!-- En la action siempre va el archivo de php que contiene las consultas de SQL para manipular los datos

El method es obligatorio, ya que este es el que me permite obtener la informacion escrita en el formulario-->

<label for="">Identificacion del cliente</label><br>
<input type="number" placeholder="Escribe aqui tu identificación"
name="id_cliente"> <br>

<label for="">Nombre Cliente</label> <br>
<input type="text" placeholder="Escribe aqui tus nombres" name="nombre"> <br>

<label for="">Apellidos del Cliente</label>
<input type="text" placeholder="Escribe aqui tu apellido" name="apellido"><br>

<label for="">Telefono</label>
<input type="number" name="telefono" placeholder="Escribe aqui tu número telefónico"><br>

<label for="">Dirección</label>
<input type="text" name="direccion" placeholder="Escribe aqui tu dirección de domicilio">

<label for="">Fecha de nacimiento</label> <br>
<input type="date" placeholder="Introduce aqui tu fecha de nacimiento" name="nacimiento"> <br>

<input type="submit" value="Enviar Datos" name="guardar" class="btn btn-outline-warning">
</form>

<?php

if(isset($_POST["guardar"]))

//isset me permite identificar si un elemento esta siendo seleccionado

{
    //Cuando necesitemos traer un elemento de un formulario, se hace por medio de una variable que dependa del metodo establecido, esa variabel puede ser $_GET o $_POST, seguido del name del elemento que necesito traer, ejemplo: $_POST['name']

    //Vamos a comenzar a realizar el tratamiendo o administracion de la informacion diligencidad en el formulario

    //Lo primero es que necesitamos el archivo de conexion, vamos a incluir ese archivo

    include('conexion.php'); 

    //Traemos el archivo de conexion para poder acceder a las trablas que estan en la base de datos

    //Lo segundo es que vamos a delcarar las variables que se necesitan para realizar una consulta de SQL, en este caso vamos a insertar información

    $id=$_POST['id_cliente']; //Esta variable va a almacenar lo que digitan en el input del formulario que tiene como metodo POST y un atributo name como id_cliente
    $nombre=$POST['nombre'];
    $apellido=$POST['apellido'];
    $telefono=$POST['telefono'];
    $direccion=$POST['direccion'];
    $fecha=$_POST['nacimiento'];

    //Todos los campos mas los datos

    //El tercer paso es que cuando ya tenemos declarada la información necesaria para hacer la consulta, se prodeuce a realizarla

    mysqli_query($conexion,"INSERT INTO tabla1()id_cliente,nombre,apellido,telefono,direccion,nacimiento) VALUES ('$id','$nombre','$apellido','$direccion','$fecha')") ;

    //mysqli_query() es una función que realizar consultas a la base de edatos mysql, esta funcion requiere de 2 parametros

    //1. Es el parametro de la conexión
    //2. Parametro de la consulta que se necesita realizar a esta base de datos


}

?>


</body>
</html>