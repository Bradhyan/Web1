//declarar variables 

var nombre="Bradhyan";
let nombre2="Carlos";
const edad=29;
apellido="Ruiz";

//Ventana para mostrar un mensaje 
alert("Hola"+ nombre);
//Ventana para preguntar o confirmar

var respuesta=confirm("¿Eres mayor de edad?");
//Mostrar un resultado en el documento de HTML
console.log("Su respuesta es: "+ respuesta); //Para verlo, en el navegador se accede a la consola con clic derecho inspeccionar

//Mostar un resultado en el documento HTML

document.write("El segundo nombre es:" + nombre2);

//Con el document.write pu7edo usar etiquetas 

document.write("<h1>"+ "Su apellido es" + apellido+"</h1>");
//Pedir informacion en una ventana y realizqar operaciones con los datos ingresados


//Ejercicio: Ingrese el valor del salario de un empleado y realice los siguientes calculos:
//Calcular el descuento de la pension, sabiendo que es el 8% de su salario
//Cacular el descuento de la salud, sabiendo que es el 10% de su salario

// 1.Crear las variables necesarias

var salario=parseFloat(prompt("Digite el valor del salario del empleado"));
var pension=salario*8/100;
var salud= salario *10/100;
var salarioneto=salario-(pension +salud);

//Muestro los resultados 

document.write("<p>"+"El sueldo inicial es de: "+salario+"</p>");
document.write("<p>"+"El descuento de la pension es de: "+pension+"</p>");
document.write("<p>"+"El descuento de la salud es de: "+salud+"</p>");
document.write("<p>"+"El El total a pagar es de: "+salarioneto+"</p>");

//Crear condicionales
//A partir del valor de la constante edad, mostrar si ese valor es mayor o menor de edad

if(respuesta)
{
    document.write("Es mayor de edad");
}
else 
{
    document.write("Es menor de edad");

}

//Multiples condiciones (condicionales anidados )
// 1.Saber si es menor de edad, o si esta entre los 18 y los 25 años o si es mayor de 25

if (edad<18)
{
    document.write("Es menor de edad");

}
else (edad>=18 && edad<=25)
{
document.write("La edad esta entre los 18 años y los 25 años");
}
else
{
document.write("Es mayor de 25 años ");
}


