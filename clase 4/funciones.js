// Variables: ALMACENAR datos
//Hay cuatro formas en JavaScript de declarar (crear) una variable

//1. usando la palabra var
//2.usando la palabra let
//3.usando la palabra const- para constantes
//4. no usando nada. 

// los tipos dedatos en JavaScript son: numeros, cadenas, objetos y valores de verdad(booleanos)
//Siempre que se va a ingresar una letra o un carácter o un simbolo va entre comillas, los numeros no

// Para concatenar (unir texto con variables ) se usa con el simbolo +o con ,

//1.Creando variables con la palabra let

let x=7;
let y=2;
let z=x+y; //Realiza operaciones con valores de otras variables. 

document.getElementById("operaciones").innerHTML="suma desde variables de JavaScript que tienen como resultado: "+z;

//Aunque las variables tambien se pueden declarar con VAR, si es mas recomendable declarar con let  ya que esta es una palabra nueva del lenguaje y por ende con mejoras. 

//¿Como se puede pedir que se ingrese un valor?
//prompt es un cuadro de dialogo que permite digitar información 
//Crear un ejercicio que pida 2 número y con ellos realice una suma, una resta y una multiplicación y mostrar el resultado 

let numero1 =parseInt(prompt("Ingrese el valor del número 1: ")); 
let numero2= parseInt(prompt ("Ingrese el valor del número 2: "));
let suma=numero1 + numero2;
let resta= numero1 - numero2;
let multiplicación = numero1*numero2;

document.write("El resultado de la suma es:" + suma +"<br>" );
document.write("El resultado de la resta es:" + resta + "<br>");
document.write("El resultado de la multiplicación es:" + multiplicación );

//Funciones de JavaScript:
//Una función es un bloque de código que realiza una tarea en particular
//Para poder ejecutar una función con JavaScript siempre debe de existir algo que lo llame
//Una función se define con la palabra function seguida del nombre y después (), donde esos parentesis pueden ir parametros (Datos de entrada)

//Ejemplo function ejemplo(){código a ejecutar }
//¿Cómo ejecutar o como llamar una funcion:?
//1.Cuando ocurre un evento( cuando se da clic en un botón)
// 2. Cuando se invoca (llamr ) desde el codigo de JavaScript 
//3.Automaticamente
// Dentro de la funcion como se puede mostrar algo: return 
// Return es devolver un valor, cuando se llega a esa palabra la funcion se deja de ejecutar 

//Ejemplo 1: Calcular la multiplicacion de dos numeros y mostrar el resultado, todo desde una funcion

//Vamos a crear una variable que alamacene el nombe de una funcion y envie los dos numeros como parametros de entrada

var ejemplo1= funcion1(6,8);

//2. mostrar el resultado en HTML

document.getElementById("funcion1").innerHTML="El resultado de la multiplicacion es: "+ejemplo1;

//3. Vamos a programar la funcion 

function funcion1(a,b)
{
return a*b
}

// Competar el código para que se pueda mostrar la function 

function funcion2()
{
    alert("Mensaje desde JavaScript")
}
//invocar la funcion
funcion2(); //Cuando yo la invoco desde el codigo de JavaScript:

