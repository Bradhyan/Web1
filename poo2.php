<?php

//Para acceder al codigo de otro archivo php, se hace por medio del include

include("poo.php");
//Crear un objeto de la clase Operaciones
$operacion1= new Operaciones(20,4);

//Ejecutamos un metodo
$TotalSuma=$operacion1->Suma();
echo "El total de la suma es: ".$TotalSuma;


?>