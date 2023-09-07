<?php 
//CICLOS
// lo usarmos para hacer una lista o lectura de datos, imagenes, identificar elementos

//1. CICLO FOR
$nfinal = 10;
for ($i= 0; $i <= $nfinal; $i++) { 
echo $i." "."<br/>";
}

//2. CICLO DO WHILE

//3 elemeento definidos como el do. 

//1. valorInicial.
//2. lo que es imprime con su incremento.
//3. la condicion.
$i=1;
do{
    echo $i."soy un ciclo do while"."<br/>";
    $i++;
}while ($i!=10);

// CICLO WHILE
$i=2;

while ($i <= 10) {
    echo $i.' soy el ciclo while'.'<br/>';
    $i++;
}




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