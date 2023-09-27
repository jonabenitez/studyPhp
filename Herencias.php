<?php
class familia{
    // PROPIEDADES DE CLASE
    public $nombre;
    private $edad;
    protected $dni;

    //METODOS
    public function asignarNombre ($nuevoNombre) {
        $this-> nombre = $nuevoNombre;
        echo "<br/>"."mi nombre es: ".$this-> nombre;
    }

    public function imprimirEdad () {
        $this-> edad = 40;
        return $this-> edad;

    }


}

$objPapa = new familia (); // iniciamos la clase
$objPapa-> asignarNombre("martin"); // entramos con el obj y asignamos su valor.
echo $objPapa->imprimirEdad();

// COMO FUNCIONA LA HERENCIA    // 
// Se puede crear una clase a partir de otra, heredando por parametro.

class trabajador extends familia {
    //PROPIEDADES - va a heredar todas las props de familia
    public $puesto; //nueva prop para los trabajadores.
    
    // METODOS - tambien herada sus metodos
    public function presentarseComoTrabajador () {
        echo "<br/>"."Hola soy".$this->nombre." y soy un ".$this->puesto;
    }


}
 
$objTrabajador = new trabajador (); //se inicia la clase
$objTrabajador-> asignarNombre('martin'); // se define el nombre de por herencia de la clase familia
$objTrabajador->puesto = ' operario'; // se define el puesto de la clase trabajador
$objTrabajador->presentarseComoTrabajador() // se imprime tanto el nombre class "familia" y el puesto de la class "trabajador"

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>