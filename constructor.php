<?php 
//CONSTRUCTOR
// la idea del contructor es poder pasar las propiedades como el nombre, pero en el momento que se crea el objeto, no por los metodos, CONTRUYE AL OBJETO A PARTIR DE SU INSTANCIACION.

class persona {
    //propiedades
    public $nombre;

    //metodos
    function __construct($nuevoNombre, $nuevoApellido){
        $this-> nombre = $nuevoNombre;
        $this-> apellido = $nuevoApellido;
    }

  public function mostrarNombre () {
    echo $this->nombre;
  }
  public function mostrarApellido () {
    echo $this->apellido;
  }



};

$objMama = new persona('maria','caldarella'); //inicia
$objMama->mostrarNombre();
$objMama->mostrarApellido();






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