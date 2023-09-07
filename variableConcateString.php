<?php
// el condicionante post: se usa para evitar el array vacio, solo se ejecuta si el usuario realiza un envio.
if ($_POST) {

  $nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];


    $valor1 = $_POST ['valor1'];
    $valor2 = $_POST ['valor2'];



// operadores e if
//suma
$suma = $valor1 + $valor2;
echo $suma." suma" ;
// resta

$resta = $valor1 - $valor2;
echo "<br/>".$resta." resta";

}

//COMPARACION CON IF e IF ANIDADOS

if ($valor1==$valor2){
    echo":</br>"." el ".$valor1." es igual q el".$valor2;

   
}
// el Y se aplica si las 2 validaciones son correctas ((validacion1) && (validacion2))
if (($valor1<$valor2) && ($valor2<10)){
    echo":</br>"." el ".$valor1." es menor q el".$valor2. "y menor que 10";

}else {echo":</br>"." el ".$valor1." es menor q el ".$valor2. " pero es mayor QUE 10";
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
    <form action="variableConcateString.php" method="post">

        Nombre: <input type="text" name="txtNombre" id="inputQueSeEnviar">
        apellido: <input type="text" name="txtApellido" id="">
        <BR />


        valor1:
        <input type="text" name="valor1" id="">
        valor2:
        <input type="text" name="valor2" id="">
        enviar:

        <input type="submit" value="Enviar">

    </form>
</body>

</html>