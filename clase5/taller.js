 //Ejercicio1
function calcular1(){

var alto=parceInt(prompt("Ingrese el alto del retángulo:"));
var ancho=parceInt(prompt("Ingrese el ancho del rectángulo:"));
var superficie= ancho*alto;

document.getElementById("a").innerHTML="La superficie es:"+superficie;
}
    //Crear y llamar a una función que recibe la velocidad en Km/hora y la muestra en metros/hora y millas/hora
function calcular2(){
    let km=prompt("Por favor ingrese la velocidad en km/h "); 

    
   let mts= 1000
   let mll=0.277778

   let metHor=km*mts
   let mllhor= km/1.6




    document.getElementById("Ej2mll").innerHTML="<p>"+"La velocidad en mts/h es:"+metHor +"</p>";
    document.getElementById("Ej2mts").innerHTML="<p>"+"La velocidad en mll/h es: "+mllhor +"</p>";
}

// ejercicio5


function operaciones(){
var numero1=parseFloat(prompt("Ingrese el  numero 1"));
var numero2=parseFloat(prompt("Ingrese el  numero 2"));
var suma= numero1+numero2;
let resta=numero1-numero2;
let multiplicaion= numero1*numero2;
let division= numero1/numero2;

document.getElementById("suma").innerHTML="El resultado de una suma es:"+suma;
document.getElementById("resta").innerHTML="El resultado de una resta es:"+resta;
document.getElementById("multiplicacion").innerHTML="El resultado de una suma es:"+multiplicaion;
document.getElementById("division").innerHTML="El resultado de una suma es:"+division;
}

    //4.	Crea una función donde pases como parámetro un nombre e imprimirlo en pantalla; Validar que el dato ingresado no sea un número, de ser así se debe decir en pantalla ingrese un nombre válido.

    /*var nombre = prompt("Favor ingrese su nombre: ")
    
    if (nombre!=Number)
    {
        document.
    }*/
    //Punto número 1



//Ejercicio 9 

function calcular3(){
var costo=parseInt(prompt("Ingrese el costo del producto"));
var cantidad=parseInt(prompt("Ingrese cuantos productos compro: "));

var resultado= costo*cantidad;
document.getElementById("precio").innerHTML="El precio total es:"+resultado;
}

