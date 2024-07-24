 //Ejercicio1
function calcular1(){
    var ancho=parseFloat(prompt("Ingrese el ancho del rectángulo"));
    var alto=parseFloat(prompt("Ingrese la altura del rectángulo"));

    var area= ancho*alto;

    document.getElementById("Ej1").innerHTML="El área del rectangulo es: "+area+"mts";
}


   //Ejercicio 2

function calcular2(){
    let km=prompt("Por favor ingrese la velocidad en km/h "); 

    
   let mts= 1000
   let mll=0.277778

   let metHor=km*mts
   let mllhor= km/1.6

    document.getElementById("Ej2mll").innerHTML="<p>"+"La velocidad en mts/h es:"+metHor +"</p>";
    document.getElementById("Ej2mts").innerHTML="<p>"+"La velocidad en mll/h es: "+mllhor +"</p>";
}

//Ejercicio 3

function Circulo(){
    var radio=parseFloat(prompt("Ingrese el radio del círculo:"));
    var Perimetro_circulo= 2* 3.14 * radio;
    var Area_circulo= 3.14 * radio;

    document.getElementById("Perimetro_circulo").innerHTML="El perímetro del circulo es:"+Perimetro_circulo;

    document.getElementById("Area_circulo").innerHTML="El área del circulo es:"+Area_circulo;
}

    //Ejercicio 4

    function calcular4(){
    var nombre = prompt("Favor ingrese su nombre: ")
    
    if (nombre!= Number)
    {
        document.getElementById("nom").innerHTML="El nombre ingresado es: "+nombre;   
     } else {
        document.getElementById("nom").innerHTML="Por favor ingresar un nombre válido";
            }
   
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


//Ejercicio 6

function convertir()
{
    var valor=parseFloat(document.getElementById("cantidad").value);
    document.getElementById("valor").innerHTML=valor;

    de=document.getElementById("de").value;
    a=document.getElementById("a").value;

    //de centigrados a Fahrenheit

    if(de==1 && a==2)
    {
        F=(9/5*valor)+32;
        if(F<=32)
        {
            document.getElementById("resultado").innerHTML= F.toFixed(2)+"... Grados Fahrenheit, NOS ESTAMOS CONGELANDO";
        }else if(F>=37 && F<=50)
        {
            document.getElementById("resultado").innerHTML= F.toFixed(2)+"... Grados Fahrenheit, ESTA HACIENDO FRIO";
        }else if(F>=51 &&F<=71)
        {
            document.getElementById("resultado").innerHTML= F.toFixed(2)+"... Grados Fahrenheit, ESTA TEMPLADO EL DÍA";
        }else if (F>=100)
        {
            document.getElementById("resultado").innerHTML= F.toFixed(2)+"... Grados Fahrenheit, TIENE FRIO O ES EL APOCALIPSIS";
        }

        //de grados Fahrenheit a centigrados

    }else if(de==2 && a==1)
    {
        C=(valor-32)/1.8;

        if(C<=0)
        {
            document.getElementById("resultado").innerHTML= C.toFixed(2)+"... Grados Centigrados, NOS ESTAMOS CONGELANDO";
        }else if(C>=5 && C<=15)
        {
            document.getElementById("resultado").innerHTML= C.toFixed(2)+"... Grados Centigrados, ESTA HACIENDO FRIO";
        }else if(C>=16 &&C<=25)
        {
            document.getElementById("resultado").innerHTML= C.toFixed(2)+"... Grados Centigrados, ESTA TEMPLADO EL DÍA";
        }else if (C>=38)
        {
            document.getElementById("resultado").innerHTML= C.toFixed(2)+"... Grados Centigrados, TIENE FRIO O ES EL APOCALIPSIS";
        }
        
     }
    
}

//Ejercicio 7:

function Masamuscular(){
    var estatura=parseFloat(prompt("Ingrese su estatura:"));
    var peso=parseFloat(prompt("Ingrese su peso:"));
    var imc=peso/estatura;

    if (imc <= 18.5){
        document.getElementById("imc").innerHTML="Bajo peso. Debe ir al nutricionista";
    }
    if (imc= 18.5<= 25.0){
        document.getElementById("imc").innerHTML="Normal";
    }
    if (imc= 25.0<=29.9){
        document.getElementById("imc").innerHTML="Sobrepeso";
    }
    if (imc <=30.0){
        document.getElementById("imc").innerHTML="Obeso. Debe ir al nutricionista";
    }
    document.getElementById("imc").innerHTML="Su índice de masa muscular es de:"+imc;

}
//Ejercicio 8

function calcular8()    
{
  let nombre8=prompt("Favor ingrese su nombre");
    document.getElementById("8").innerHTML="<p>"+"Bienvenido"+"</p>"+ nombre8;


}

//Ejercicio 9 

function calcular9(){
var costo=parseInt(prompt("Ingrese el costo del producto"));
var cantidad=parseInt(prompt("Ingrese cuantos productos compro: "));

var resultado= costo*cantidad;
document.getElementById("precio").innerHTML="El precio total es:"+resultado;
}




//Ejercicio 10

function c_fecha(){

    let dia = Number(prompt("Digite la fecha del dia actual"));
    let mes = Number(prompt("Digite el numero del mes actual"));
    
    
   let diassemanas= 7
    let diasMeses = 30
    let diasAño = 360
    let semanaaño = 52
    
    
    let calculoDiasTranscurridos = (mes - 1) * diasMeses + dia
    
    let respuestadias = diasAño - calculoDiasTranscurridos

    let calculosemanastranscurridas = (mes -1) * 4 

    if (dia <7){
       let semana = 1
       let sumasemanas = calculosemanastranscurridas + semana
       let respuestasemanas = 52 - sumasemanas
       document.getElementById('dias1').innerHTML = "Los dias que faltan para terminar el año son: " + respuestadias + " y las semanas que faltan son: " + respuestasemanas
    }
    else if  (dia >= 8 && dia <=14 ){
        let semana = 2
        let sumasemanas = calculosemanastranscurridas + semana
        let respuestasemanas = 52 - sumasemanas
        document.getElementById('dias1').innerHTML = "Los dias que faltan para terminar el año son: " + respuestadias + " y las semanas que faltan son: " + respuestasemanas
    }
    else if (dia >= 15 && dia <=22 ){
        let semana = 3
        let sumasemanas = calculosemanastranscurridas + semana
        let respuestasemanas = 52 - sumasemanas
        document.getElementById('dias1').innerHTML = "Los dias que faltan para terminar el año son: " + respuestadias + " y las semanas que faltan son: " + respuestasemanas
    }
    else if (dia >= 23 && dia <=31 ){
        let semana = 4
        let sumasemanas = calculosemanastranscurridas + semana
        let respuestasemanas = 52 - sumasemanas
        document.getElementById("dias1").innerHTML = "Los dias que faltan para terminar el año son: " + respuestadias + " y las semanas que faltan son: " + respuestasemanas
    }
    }

