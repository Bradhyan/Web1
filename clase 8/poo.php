<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO EN PHP</h2>

    <P>
        Es un lenguaje de programación que esta organizado por objetos constituidos por datos (atributos) y funciones (Metodos) <br>
        <b>Objeto:</b> Se crea a partir de una clase (molde) donde se asigna los valores de los datos y las funciones <br>
        <b>Clase:</b> Va a contener una estructura de atributos y metodos que estos pueden ser empleados varias veces por distintos objetos y se 
        crean con la palabra class seguido del Nombre de la clase
        <br>
        <b>Atributos:</b> se definen como variables <br>
        <b>Metodos</b> Se definen como funciones (function) <br>
        Tanto las variables como las funciones se pueden definir como: Publicas, privadas y estaticas <br><br>

        <b>Publicas (public):</b>Pueden ser accedidas a ellas por fuera de la clase <br>
        <b>Pivadas (private)</b> Solamente puedenh se accedidas dentro de la clase <br>
        <b>Estaticas (estatic)</b> SE caracterizan por que no se necesita crear un objeto (instanciar) para usarse, si no que se pueden llamar losatributos o los metodos simplemente usando :: <br>
        <b>intanciar una clase:</b> Significa crear un objeto que se hace por medio de la palabra NEW <br>
        <b>Desde el objeto para acceder a los atributos:</b> Se hace por medio de -> en un quion y el signo de mayor que <br>
<b>Desde el objeto para acceder a los metodos:</b> Se hace por medio de la variable  $this 

    </P>

    <h3>Ejemplo:</h3>

    <?php 
    // Crear una clase que contenga los nombres y apellidos de un empleado, que tambien genere un saludo con el nombre y a poartir de esa clase cada vez que se cree un empleado se debe asigar el nombre y el apellido

    class Empleado
    {
        //Atributos se hacen por medio de variables y se asigna el metodo de acceso 

public $nombre;
public $apellido;

//Metodo es una accion que realiza la clase y se hacen por medio de funciones y se asigna el metodo de acceso 

public function Saludo()
        {
echo "Buenos días".$this->nombre; //$This sirve para acceder o llamar desde las funciones un atributo.
        }

    }

    // Instanciar esa clase 

$Empleado1 = new Empleado;  //Creamos el primer objeto de esa clase 
//Asignar valores a los atributos que puede tener ese empleado 1

$Empleado1-> nombre='Mario';

//Mostrar el nombre del empleado 1

echo "El nombre del empleado 1 es: ".$Empleado1->nombre;
echo "<br>"

//Ejecutar el metodo de la clase

$Empleado1 ->Saludo();

//Crear una clase que a la hora de crear un objeto se deba de enviar 2 numeros y tenga la opcion de llamqar a un metodo que realice una operacion matematica

class Operaciones
{
    // Atributos
    public $numero1=0;
    public $numero2=0;
    public $resultado=0;

    //Metodos

    //Constructor
    function__construct($Cant1, $Cant2)
    {
        //Como desde un metodo llamo a un atributo
        $this->numero1=$Cant1;
        $this->numero2=$Cant2;
    }
    public function Suma()
    {
        $this -> resultado=$this->numero1 + $this->numero2;
        return $this->resultado;
    }
    public function Resta()
    {
        $this -> resultado=$this->numero1 - $this->numero2;
        return $this->resultado;
    }

    public function Multiplicacion()
    {
        $this -> resultado=$this->numero1 * $this->numero2;
        return $this->resultado;

    }

    public function Division()
    {
        $this -> resultado=$this->numero1 / $this->numero2;
        return $this->resultado;
    }
}

    ?>
</body>
</html>