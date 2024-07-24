//Variables:ALMACENAR datos
//Hay 4 formas en JavaScript de declarar(crear) una 
//variable
//1.usando la palabra var
//2.usando la palabra let
//3.usando la palabra const- para constantes
//4.no usando nada
//Los tipos de datos en JavaScript son: numeros,cadenas,
//objetos y valores de vardad(booleanos)
//SIEMPRE que se va a ingresar una letra o un caracter o
//simbolo va entre "", los numeros no
//Para concatenar(unir, texto con variables) se usa con
//el simbolo + o con ,
//1.Creando variables con la palabra let
/*let x=7;//Inicializada
let y=9;
let z= x + y;//Realiza operaciones con valores de otras variables*/
/*var x=7;
var y=2;
var z=x+y;
document.getElementById("operaciones").innerHTML="Suma desde variables de JavaScript que tiene como resultado: " + z;*/
//Si es mas recomendable declarar con let
//¿Como se puede pedir que se ingrese un valor?
//prompt es un cuadro de dialogo que permite digitar informacion
//Crear un ejercicio que pida 2 numeros y con ellos
//realice una suma,resta,multiplicacion y muestre el resultado
//let numero1=parseInt(prompt("Ingrese el valor del numero 1"));
//let numero2=parseInt(prompt("Ingrese el valor del numero 2 "));
/*let suma= numero1 +numero2;
let resta= numero1 - numero2;
let multiplicacion= numero1*numero2;
document.write("El resultado de suma es: "+suma+"<br>");
document.write("El resultado de resta es: "+resta+"<br>");
document.write("El resultado de multiplicacion es: "+multiplicacion);*/
//Funciones en JavaScript:
//Una funcion es un bloque de codigo que realiza una tarea en 
//particular
//Para poder ejecutar una funcion con JavaScript siempre debe de 
//existir algo que lo llame
//Una funcion se define con la palabra function seguida del nombre
//y despues (), donde en esos parentesis pueden ir parametros(datos de entrada)
//Ejemplo function ejemplo(){ codigo a ejecutar}
//Como ejecutar o como llamar una funcion:
//1.Cuando ocurre un evento(cuando se da clic en un boton)
//2.cuando se invoca(llamar) desde el codigo de JavaScript
//3.Auntomaticamente
//Dentro de la funcion como se puede mostrar algo: return
//Return es devolver un valor, cuando se llega a esa palabra la funcion se deja de ejecutar
//Ejemplo 1: Calcular la multiplicacion de dos numeros y mostrar el resultado, todo desde una funcion
//1.Vamos a crear una variable que almacene el nombre de una funcion y envie los dos numeros como parametros de entrada
/*var ejemplo1= funcion1(6,8);
//2.Mostrar el resultado en HTML
document.getElementById("funcion").innerHTML="El resultado de la multiplicacion es: "+ejemplo1;
//3.Vamos a programar la funcion
function funcion1(a,b)
{
    return a * b;
}
//Completar el codigo para que se pueda mostrar la funcion
function funcion2()
{
    alert("Mensaje desde JavaScript");
}
//Invocar la funcion
funcion2();//cuando se invoca(llamar) desde el codigo de JavaScript*/
//Repaso:
//Declarar variables:
var nombre="Luisa";
let nombre2="Carlos";
const edad=21;
apellido="Ruiz";
//Ventana para mostrar un mensaje
//alert("Hola " + nombre);
//Ventana para preguntar o confirmar 

//Mostrar un resultado por consola
//console.log("Su respuesta es: "+respuesta);//Para verlo, en el navegador hay que dar clic derecho, despues seleccionar inspeccionar y ver en consola
//Mostrar un resultado en el documento de HTML
document.write("El segundo nombre es: "+nombre2);
//Con el document.write puedo usar etiquetas
document.write("<h1>"+"su apellido es "+apellido+"</h1>");
//Pedir informacion en una ventana y realizar operaciones con los datos ingresados
//Ejercicio: Ingrese el valor del salario de un empleado y realice los siguienes calculos:
//Calcular el descuento de la pension, sabiendo que es el 8% de su salario
//Calcular el descuento de la salud,sabiendo que es el 10% de su salario
//1.Crear las variables necesarias
//var salario=parseFloat(prompt("Digite el valor del salario del empleado"));
/*var pension= salario * 8/100;
var salud= salario * 10/100;
var salarioneto= salario - (pension + salud);
//Muestro los resultados:
document.write("<p>"+"el sueldo incial es de: "+salario+"</p>");
document.write("<p>"+"el descuento de la pension es de: "+pension+"</p>");
document.write("<p>"+"el descuento de la salud es de: "+salud+"</p>");
document.write("<p>"+"el total a pagar es de: "+salarioneto+"</p>");*/
//Crear condicionales
//A partir del valor de la constante edad, mostrar si ese valor es mayor o menor de edad
let respuesta=confirm("¿Eres mayor de edad?");
if(respuesta)
{
    document.write("Es mayor de edad");
}
else
{
    document.write("Es menor de edad");
}
document.write("<br>");
//Multiples condiciones (condicionales anidados)
//Saber si es menor de edad, o si esta entre los 18 y los 25 años o si es mayor de 25 años
if(edad<18)
{
    document.write("Es menor de edad");
}
else if(edad>=18 && edad<=25)
{
    document.write("La edad esta entre los 18 años y los 25 años");
}
else
{
    document.write("Es mayor de 25");
}




