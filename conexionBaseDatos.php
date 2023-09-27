<?php


// 1) definimos el server: definimos la direccion
// 2) definimos el usuario: 'root'
// 3) definimos la contrasena: "vacia" 
$servidor = "localhost"; // localhost - 127.0.0.1
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasena);
    //la clase PDO es la que me permite conectarme a la base, recibiendo como parametros, la direccion de la base de datos, un usuario y la contrasena.


    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //accedemos al metodo setAttribute de la conexion, para traernos estos 2 argumentos.
    // ATTR_ERRMODE y ERRMODE_EXCEPTION: es un constante estatica, que nos sirven para mostrar los errores, estos nos permiten que en caso de que haya error mostrarlos en el cath

    //PRUEBA DE LA INSERCION si funciona.
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'introduccion a las bases', 'foto.jpg');
    ";
    // EJECUTAMOS CON CONEXION->EXEC : CADA VEZ QUE ACTUALIZAMOS LA PAGINA SE INSERTA UN NUEVO DATO
    $conexion->exec($sql);


    // en caso de que este todo bien:    
    echo "conexion establecida";



} catch (PDOException $error) {

    echo "conexion erronea" . $error;
}
;



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