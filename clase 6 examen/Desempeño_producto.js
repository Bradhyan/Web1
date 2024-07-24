function convertir()
{
    var valor=parseFloat(document.getElementById("cantidad").value);
    document.getElementById("valor").innerHTML=valor;

    de=document.getElementById("de").value;
    a=document.getElementById("a").value;

    //de centigrados a Fahrenheit

    if(de==1 && a==2)
    {
       let COP=4396*valor;

        document.getElementById("resultado").innerHTML=COP;
       
       

    }else if(de==2 && a==1)
    {
       let EUR=valor/4396;
       document.getElementById("resultado").innerHTML=EUR;

        
     }
    
}

function factorial()
{
    num = parseInt (prompt("Ingrese el número a calcular"));
    var total = 1;
    for (i=1; i<=num; i++){
        total = (total*i);
    }
    document.getElementById('factor').innerHTML="El factorial de "+num+" es "+total;
}
