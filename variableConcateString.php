<?php
// el condicionante post: se usa para evitar el array vacio, solo se ejecuta si el usuario realiza un envio.
if ($_POST) {

    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    echo "hola " .$nombre." ".$apellido;
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

        enviar:
        <input type="submit" value="Enviar">

    </form>
</body>

</html>