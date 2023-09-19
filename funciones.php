<?php
//las funcionalidades que podemos usar varias veces.
function saludar($nombre, $apellido = "")
{
    // si el apellido es opcional agregamos el valor por default ""
    echo "hola " . $nombre . " " . $apellido . "<br/>";
}
;

saludar("juan", "martinez");
saludar("jose", );
// LINK DE FUNCIONES CON FUNCIONALIDADES
// https://www.php.net/manual/es/language.functions.php

//LINK DE FUNCIONES MATEMATICAS
// https://www.php.net/manual/es/ref.math.php
// con este por ej generamos un numero ramdom entre 2 valores
$creadorNum = rand(1, 10);
echo $creadorNum . "<br/>";

// LINK DE FUNCIONES PARA STRING
// https://www.php.net/manual/es/book.strings.php

// LAS 10 MAS USADAS

//1) strpos($cadena, $subcadena):
// ENCONTRAR  y DEVUELVE el index de la cadena que le asignamos, primero va en que cadena lo busca y despues que index queremos encontrar, en esta caso l que es el 2.
$cadena = "Hola, mundo!";
$posicion = strpos($cadena, "l"); // $posicion será igual a 2.

//2)substr($cadena, $inicio, $longitud): 
//DEVOLVER una parte de una cadena, empezando desde la posición especificada por $inicio y con una longitud opcional.
$nombre = "jonatan benitez";
$subtrDemo = substr($nombre,0,7);
echo $subtrDemo."<br/>";
//3) strtoupper
$nombreMayusculas = strtoupper($nombre);
echo $nombreMayusculas;

//3) str_replace($busqueda, $reemplazo, $cadena):
// REEMPLAZAR todas las ocurrencias de una subcadena con otra en una cadena.
$cadena = "Hola, mundo!";
$nueva_cadena = str_replace("mundo", "amigo", $cadena); // $nueva_cadena será igual a "Hola, amigo!"

//4) trim($cadena): Elimina espacios en blanco y otros caracteres de espacio en los extremos de una cadena.
$cadena = "   Hola, mundo!   ";
$cadena_sin_espacios = trim($cadena); // $cadena_sin_espacios será igual a "Hola, mundo!"

//5) explode($delimitador, $cadena): Divide una cadena en un array de substrings basado en un delimitador.
//DE STRING --> ARRAY
$cadena = "Manzana,Naranja,Plátano";
$frutas = explode(",", $cadena); // $frutas será un array con elementos "Manzana", "Naranja" y "Plátano"

//6) implode($glue, $array) o su forma abreviada join($glue, $array): Combina los elementos de un array en una sola cadena utilizando un separador (glue).
//DE ARRAY --> STRING
$frutas = ["Manzana", "Naranja", "Plátano"];
$cadena_frutas = implode(", ", $frutas); // $cadena_frutas será igual a "Manzana, Naranja, Plátano"
//////////////////////////////////////////////

//FUNCTION DATE
$hoy = date("d - m - y");
echo "<br/>" . $hoy;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>funciones</h1>
</body>

</html>