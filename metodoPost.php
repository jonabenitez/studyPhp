//ENVIOS DEL FRONT: METODO POST



<?php
// el condicionante post: se usa para evitar el array vacio, solo se ejecuta si el usuario realiza un envio.
if($_POST){
//recibe la info del formulario, txtNombre (metodo post)
$nombre=$_POST['txtNombre'];
// lo que esta en name es lo mismo que lo que se envia al este array y se completa
// lo almacena
echo "hola".$nombre;
}
// y lo imprime


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="metodoPost.php" method="post">
        enviar:
        <input type="text" name="txtNombre" id="inputQueSeEnviar">
        <BR />

        <input type="submit" value="Enviar">

    </form>
</body>

</html>