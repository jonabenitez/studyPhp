<?php
echo "<h1>array</h1>";

// INDICE NUMERICOS
$frutas = array("fresa", "manzana", "pera");
print_r($frutas); //imprime el la funcion del array

// indices asignados no numericos ASOCIATIVOS
$frutasI = array("f" => "fresa", "m" => "manzana", "p" => "pera");

// COMO LEER ARRAYS  //
echo $frutas["1"] . "<br/>"; //numero

echo $frutasI["m"] . "<br/>"; //asociativo


// COMO RECORRER ARRAY : FOR Y FOREACH

//DIFERENCIAS:
//for: lo utilizamos cuando conocemos la cantidad de iteraciones o el numero de la cadena
for ($i = 0; $i < 3; $i++) {
    echo $frutas[$i] . "<br/>";
}

//foreach: se usa para recorrer e iterar sin la nececidad de conocer el numero de iteraciones

//1. recorre el array $frutas
//2. y por cada vuelta quiero el indice ya sea numero  o asociativo o el valor de este indice.
foreach ($frutasI as $indice => $value) {
    echo $indice . "<br/>"; //imprime f - m - p
    echo $value . "<br/>"; //imprime fresa - manzana - pera
}
;

echo "<h1>FUNCION DE ARREGLOS </h1>";
// FUNCIONES PARA ARREGLOS
//  https://www.php.net/manual/es/function.array
// 
echo "<h2>1) metodo PUSH: coloca nuevo elementos en el arreglo</h2>";

// METODO PUSH: AGREGAR ELEMENTO AL ARRAY
$nombres = array("jona", "lulu", "dakota");
print_r($nombres);
echo "</br>";
array_push($nombres, "zeus");
print_r($nombres);


echo "<h2>2) metodo pop: quita el ultimo elemento en el arreglo</h2>";
// METODO POP: QUITAR EL ULTIMO ELEMENTO AL ARRAY
array_pop($nombres);
print_r($nombres);

echo "<h2>3) metodo REDUCE: Reduce un array a la suma de todos los elementos</h2>";
// el reduce funciona con el array a reducir y una funcion con 2 argumentos, una acumuladora y otra que usa el elemento iterado enel momento.

// el acumuladora va guardando la suma de el y el elemento en cada vuelta
// el 0 del final indica que arranque el acumulador en 0 por defecto u otro valor.
$Areducir = array("1", "2", "3", "4");

$reduce = array_reduce($Areducir, function ($acumulador, $elemento) {
    return $acumulador + $elemento;
}, 0);
echo $reduce . "<br/>";


echo "<h2>3) metodo unshift: agrega elementos u otro array al principo del array</h2>";
print_r($nombres);
array_unshift($nombres, $Areducir);
echo "<br/>";
print_r($nombres);



echo "<h2>3) metodo shift: quita el elemento al principio del array, en este caso quita el array Areducir</h2>";
print_r($nombres);
echo "<br/>";
array_shift($nombres);
print_r($nombres);

// METODO SEARCH
echo "<h2>3) metodo SEARCH: busca un elemento que coincida en la cadena y devuelve el I</h2>";

$key = array_search("dakota",$nombres);
echo $key."  ---> es el index o la key de dakota"

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