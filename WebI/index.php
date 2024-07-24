<?php //Desde aqui indico que voy a iniciar codigo de php

//VARIABLES:Es un espacio de memoria que almacena informacion
//en php las variables pueden almacenar cualquier tipo de informacion
//Numeros(enteros-decimales)Cadenas(texto,simbolos, caracteres),booleanos(v-f)
//Para crear vairiables se hace con el simbolo $nombrevariable;
$texto="Hola";
$entero=5;
$decimal=8.9;

//Como se muestran esos valores de las variables
//Para imprimir se hace con la palabra echo o con print
echo "<p style=color:pink;> Hola "," Como estas</p>";
echo "<br>";
echo "<script>alert('Echo con JavaScript y PHP');</script>";

//echo permite imprimir en uno solo varias cadenas a la vez, mientras que con print solo podemos imprimir una cadena cada vez que la llamemos 

echo $texto . " Valeria" . " tienes ". $entero . " años";
//En php para concatenar se hace por medio del simbolo .

//Operadores: Artimeticos, logicos, relaciones
// + suma
// - resta
// * multiplicacion
// / division
// ** Exponente
// % Modulo 
$numero1=68;
$numero2=31;
$suma = $numero1 + $numero2;
echo "<p>La suma entre la variable $numero1 y $numero2 es: ".$suma."</p>";
//Validar cual de ambas variables contiene un numero mayor y mostrar un mensaje
if($numero1>$numero2)
{
    echo "El numero mayor es: ".$numero1;
}
else
{
    echo "El numero mayor es: ".$numero2;
}
$tiempo= date("H");
echo "<br>";
//Enviar un mensaje para saber si es de dia o de noche, segun la hora actual
if($tiempo<"19")
{
    print "Buenos días";
}
else
{
    print "Buenas noches";
}
echo "<br>";
$galletas=false;
//Crear un condicional que muestre un mensaje "Hay galletas", sino que muestre "No hay galletas"
if($galletas)
{
    print "Hay galletas";
}
else
{
    print "No hay galletas";
}
$numero3=1200;
echo"<br>";
//Crear un condicional que valide si el valor de la anterior variable esta entre 800 y 900 para enviar un mensaje "Estas en el rango correcto", si es mayor que 1000 que muestre  "Estas en un rango mayor" y si no imprima "No estas en ningun rango"
//Simbolos de operaciones Logicas:
//Y --> && (Es verdadero si ambas se cumplen)
//O --> || (Si al menos una es verdadera)
if($numero3<=800 && $numero3>=900)
{
    print "Estas en el rango correcto";
}

else if($numero3>1000)
{
    print "Estas en un rango mayor";
}
else
{
    print"No estas en ningun rango";
}
//Selector multiple:
$color="azul";
switch($color)
{
    case "rojo":
        echo"Tu color favorito es rojo";
    break;
    case "azul":
        echo"Tu color favorito es azul";
    break;
    case "amarillo";
        echo"Tu color favorito es amarillo";
    break;
    default:
         echo"Tu color favorito no es ni el rojo, ni azul,ni amarillo";
}
//Cierro el codigo de php?>