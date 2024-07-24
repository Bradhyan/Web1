<?php
// ToDAS las conexiones se necesitan los siguientes campos:
//1. Servidor (localhost)
//2.usuatio de base de datos, si no hay un usuario programado por efecto es root (publico)
//3.Contraseña de base de datos, si no hay contraseña este campo se deja vacio.
//4. El nombre de la base de datos que se va a utilizar 

//Declarar las variables que se necetitan para crear una conexion

$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="clase1";

//Crear la conexiòn por medio de un objeto de una clase de php que ya esta programada para generar una conexion, es una clase ya establecida desde el mismo lenguaje(php)

$conexion= new mysqli($servidor, $usuario, $password, $baseDeDatos); //YA TENEMOS LISTA LA CONEXION

// es muy recomendable comprobar si existe un error a la hora de conectarnos a la base de datos 

//Así mismo si hay un error, vamos a romper esa coneccion para que el navegador no se quede intentando buscar conexion

if ($conexion->connect_errno)
{
    //connect_errno verifica errores de conectividad
    echo "Nuestra conexion presenta fallas";
    exit();
}

?>