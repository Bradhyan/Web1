<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arragelos con PHP</title>
</head>
<body>
    <h2>Ciclos con php</h2>
    <p>
        Ciclo for: se repite una cantidad fija de veces
        <br>
        Se divide en 3 partes: <br>
        <b>Inicializacion:</b> Esta es la zona donde se establece los valores inciales del ciclo <br>
        <b>Condicion:</b>En esta zona se decide si el ciclo continua o se tiene, aqui siempre vamos a encontrar una operacion Relacional(<,>) por que debo de comparar el valor de la variable <br>
        <b>Incremento-Actualizacion:</b>Es el nuevo valor que se asigna despues de cada repeticion a la variable que controla el ciclo (o se va a sumar o se puede restar)
    </p>
    <h2>Realizar una lista de numeros desde el 1 hasta 10, pero que solo muestre los numeros pares</h2>
    <?php
    /*Desde aqui comienza el codigo de php*/
    for($i=2;$i<=10;$i=$i+2)
    {
        echo $i;
        echo "<br>";
    }

    ?>
    <h2>Realizar una lista de numeros desde el 15 hasta 1</h2>
    <?php
        for($x=15;$x>=1;$x=$x-1)
        {
            echo $x;
            echo "<br>";
        }
    ?>
    <h2>Arreglos-Array</h2>
    <p>
        Un arreglo es una variable que almacena mas de un dato del mismo tipo, se puede acceder a esos datos por medio de su indice, por defecto los indices empiezan en 0, pero se valor se puede modificar 
    </p>
    <?php
        $marcacarros=array("Mazda","Ford","Chevrolet","Toyota","BMW");
        //$micarro=array("Martes","Gris","Mazda");
        //Cuales son los indices de este Arreglo:
        //Mazda=0,Ford=1,Chevrolet=2,Toyota=3,BMW=4
        echo "Mi marca favorita de autos es: ".$marcacarros[1]. " y ".$marcacarros[3];
        //Los indices se pueden modificar su valor
        $micarro=array('dia'=>'Martes','color'=>'Gris','marca'=>'Mazda');
        //Cuales son los indices:dia,calor,marca
        //Cuales son los valores-datos del arreglo:Martes,Gris,Mazda
        echo "<br>";
        echo "El día que compre mi carro fue el: ".$micarro['dia'];
        echo "<br>";
        echo "y la Marca del carro es: ".$micarro['marca'];
        echo "<br>";
        $equipo=array('portero'=>'Juan','defensa'=>'Luis','medio'=>'Mateo','delantero'=>'Ramon');
        //Indices: portero[0], defensa[1],medio[2],delantero[3]
        //Datos:Juan, Luis, Mateo y Ramon= $equipo=array("Juan","Luis","Mateo","Ramon")
        //Ciclo que puede acceder a los arreglos se llama foreach
        //Foreacho es un bucle que me permite recorrer el arreglo y los objetos de ese arreglo de manera controlada
        //foreach() vamos a tener 3 variables
        //1.la del arreglo que quiero recorrer
        //2.la variable que almacene los indices
        //3.la variable que almacene los datos
        foreach($equipo as $posicion=>$jugadores)
        {
            echo "El ".$posicion." es ".$jugadores;
            echo "<br>";
        }
        //Crear una variable que almacene los idiomas de 5 paises y muestren un mensaje que diga los idiomas por pais
        $idiomas=array('España'=>'Español','Irlanda'=>'Ingles','Brasil'=>'Portuges','Alemania'=>'Aleman','Arabia'=>'Arabe');
        foreach($idiomas as $pais=>$idioma)
        {
            echo "En ".$pais. " su idioma es ".$idioma;
            echo "<br>";
        }
        //Funciones:Son instrucciones a las que podemos acceder o recurrir a estas en cualquier parte del codigo
        //Pueden tener parametros(dato de entrada) que necesita para poder ejecutarse y realizar diferentes tareas
        function mostrarTexto($texto)
        {
                echo"El texto de esta funcion se envia como parametro de entrada y es ".$texto;
        }
        //mostrar esa funcion
        mostrarTexto("Hola");
        echo "<br>";
        function primeraFuncion() //Declarando una funcion
        {
           //Aqui siempre va las instrucciones que va a realizar esa funcion
            echo "Mensaje desde la funcion";//Instrucción
        }
        //Como se a mostrar-ejecutar esa funcion, sin un elemento(HTML) de por medio
        primeraFuncion();
        echo "<br>";
        //Crear una funcion que sume y multiplique 3 numeros que le envien al ejecutar esta funcion
        function operaciones($num1,$num2,$num3)
        {
            //Cuantas instrucciones tiene esta funcion
            $suma=$num1+$num2+$num3;
            echo "La suma entre los 3 valores es: ".$suma;
            echo "<br>";
            $multiplicacion=$num1*$num2*$num3;
            echo "La multiplicacion entre los 3 valores es: ".$multiplicacion;
        }
        //Ejecutamos esa funcion
        operaciones(30,23,10);
        echo "<br>";
        //Crear una funcion que haga 3 operaciones matematicas, que requiera de 2 numeros para poder hacer las operaciones pero solo se ejecute la operacion que se escoja cuando se ejecute esta funcion
        function operacion2($numero1,$numero2,$operacion)
        {
                //Instruciones
                $resultado=0;
                //Crear unas condiciones que validen que operacion seleccionaron
                if($operacion=="Sumar")
                {
                    $resultado=$numero1 + $numero2;
                }
                else if($operacion=="Restar")
                {
                    $resultado=$numero1 - $numero2;
                }
                else if($operacion=="Multiplicar")
                {
                    $resultado=$numero1 * $numero2;
                }
                echo "El resultado de la operacion seleccionada es de: ".$resultado;
        }
        operacion2(20,6,"Sumar");
        echo "<br>";
        operacion2(30,7,"Restar");
        echo "<br>";
        mostrarTexto("Estoy ejecutando otra funcion");
    ?>
</body>
</html>