<?php


// LAS CLASES: se basa todo en plantillas o MOLDES y una vez que tengamos estas plantillas, crear los objetos.
// las clases se conforman de 2 partes:


// la primera parte: 
//donde se definen las propiedades, lo que voy a poder imprimir y manipular

// la segunda parte:
// donde creo la funcion O metodos para aplicar a las propiedades del metodo.


//VISIBILIDAD DE LAS PROPIEDADES
//a. public: este se tiene acceso por fuera de la clase, lo podemos definir y cambiar, como el nombre y en definirNombre.

//b. private: esta va a tener ciertas restricciones, donde, a diferencia de las public solo la podemos modificar  o utilizarlo solo por medio de los METODOS o funciones, no podemos verla con $objAlumnos->edad.

//c. protected: es lo que se define como encapsulamiento, esto es definido y solo se puede definir o acceder en la clase o la heredades de esta misma.

class Personas
{


    // PROPIEDADES
    public $nombre;
    public $apellido;
    private $edad;

    protected $altura;



    //FUNCIONES
    //le asignamos donde va a entrar este nombre
    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function asignarApellido($nuevoApellido)
    {
        $this->apellido = $nuevoApellido;
    }
    public function darLaPata()
    {
        echo " te doy la pata" . $this->nombre;
    }


    // ASI SE HACE VISIBLE LA EDAD, DEFINIENDOLA Y RETORNANDOLA DENTRO DEL METODO
    public function ImprimirEdad()
    {
        $this->edad = 20;
        return $this->edad;
    }
}

;
//// CREACION DEL ALUMNO 1 /////
$objAlumno1 = new personas(); // CREACION DEL OBJETO
$objAlumno1->asignarNombre("lulu"); //LAMADA AL METODO
echo $objAlumno1->nombre; // IMPRIMIR LA PROP

///// CREACION DEL ALUMNO 2 /////
$objAlumno2 = new personas(); //CREACION DEL OBJETO
$objAlumno2->asignarNombre(" dakota"); //LLAMADA AL METODO
echo $objAlumno2->darLaPata(); //LLAMADA AL OTRO METODO
echo "<br/>";

// COMO MOSTRAR EL PRIVATE
// LA DEFINO DENTRO DE LA FUNCION o METODO Y ACCEDO POR MEDIO DE ESTE
echo $objAlumno1->ImprimirEdad();
echo "<br/>";

// MOFIDIFICAR PROPS PRIVADAS CON GET Y SET.
class MiClase
{

    //PROPIEDAD
    private $miPropiedad;





    // METODOS O FUNCIONES
    //el constructor se usa para dar un valor inicial, que despues voy a poder definir en el metodo
    public function __construct($valorInicial)
    {
        $this->miPropiedad = $valorInicial;
    }

    public function getMiPropiedad()
    {
        return $this->miPropiedad;
    }

    public function setMiPropiedad($nuevoValor)
    {
        $this->miPropiedad = $nuevoValor;
    }
}

// Crear una instancia de la clase
$objeto = new MiClase("SE INSTANCIA CON EL VALOR INICIAL QUE SE ORIGINA ACA Y VA A CONSTRUCTOR, QUE LO DEFINIRA COMO miPropiedad");
echo "<br/>";
// New MiClase --> Constructor --> miPropiedad

// MOSTRAR EL VALOR DE ESTA PROPIEDAD PRIVADA CON GET.
$valorActual = $objeto->getMiPropiedad();
echo $valorActual; // SE MUESTRA EL VALOR ASIGNADO: "SE INSTANCIA LA CLASE CON ESTE VALOR INICIAL"
echo "<br/>";
// MODIFICAR EL VALOR DE LA PROPIEDAD PRIVADA CON SET.
$objeto->setMiPropiedad("Nuevo valor ");
$valorActualizado = $objeto->getMiPropiedad();
echo $valorActualizado; // Esto mostrará "Nuevo valor"
echo "<br/>";

echo "<h3>CLASE PERROS <h3/>";

////////////////////////////////////////////////////////////////

class Perros
{
    //PROPIEDADES
    public $nombre;
    private $peso;

    //METODOS
    public function AsignarNombre($NuevoNombre)
    {
        $this->nombre = $NuevoNombre;
    }

    // para mostrar o modificar el private

    public function __construct($pesoPredefinido)
    {
        $this->peso = $pesoPredefinido;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($nuevoPeso)
    {
        return $this->peso = $nuevoPeso;

    }

}
;

$Perros1 = new Perros("20"); //INSTANCIA LA CLASE - ESTE VALOR VA HACIA EL CONTRUCTOR
$Perros1->AsignarNombre("DAKOTA"); //SE ASIGNA EL VALOR
echo $Perros1->nombre; //muestra en pantalla
echo "<br/>";

//MOSTRAR EL PESO ASIGNADO
echo "<br/>" . "retorna el nuevo valor asignado en la instancia ";
echo $Perros1->getPeso(); // --> 20, el asignado arriba que va a constructor

$Perros1->setPeso(50);
echo "<br/>" . "retorna el nuevo valor asignado en el set ";
echo $Perros1->getPeso(); //--> retorna el valor del set



class familia
{


    //      PROPIEDADES       //
    public $integrantes;
    private $dni;

    ///             METODOS   ////
    public function nuevoIntegrante($nuevoIntegrante)
    {
        $this->integrantes = $nuevoIntegrante;
    }
    public function imprimirIntegrante()
    {
        echo "<br/>"."hola soy ".$this->integrantes;
    }

    public function imprimirDni ($nuevoDni) {
        $this->dni = $nuevoDni;
        return "<br/>"."dni: ".$this->dni;
    }
}
// CREAMOS UN OBJETO
$objIntegranteA = new familia(); //iniciamos la clase familia.
$objIntegranteA->nuevoIntegrante("brian"); //el objeto accede al metodo y lo define
echo $objIntegranteA->ImprimirIntegrante();



//MOSTRAR PROP PRIVADA 
//(X) NO PUEDO DIRECTAMENTE DESDE LAS PROPIEDADES
echo $objIntegranteA->integrantes; //(V) puedo porque es public
// echo $objIntegranteA->dni;  // (X) no puedo porque es privado


//(V) DESDE LOS METODOS - puedo acceder o modificarlos desde aqui, sino hay un metodo para alterarlo, no se puede alterar.
echo $objIntegranteA-> imprimirDni('39500263');


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