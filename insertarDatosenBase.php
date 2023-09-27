<?php 
// EN LA BASE DE DATOS CREAMOS UNA TABLA EN ALBUM //

//          1ra PRIMERA FILA        //
//   EN NOMBRE = EL ID - ENT (entero).
//   A.I =  LO MARCAMOS PARA QUE SE AUTOINCREMENTE.
//   MARCAMOS COMO PRIMARY = indica que es un unico dato que no se repite.

//          2DA SEGUNDA FILA        //
//   EN NOMBRE = EL NOMBRE DE ARCHIVO - VARCHAR (texto)
//   A.I =  LO MARCAMOS PARA QUE SE AUTOINCREMENTE.
//   LONGITUD/VALORES = 500.

//          3RA TERCERA FILA       //
//EN NOMBRE = RUTA DEL ARCHIVO - VARCHAR (texto).
//   A.I =  LO MARCAMOS PARA QUE SE AUTOINCREMENTE.
//   LONGITUD/VALORES = 250.

                /// 2 INSERCION DE DATOS ///
// vamos a la tabla y dentro de la misma vamos a insertar, vamos a necesitar una "sentencia sql"

// nombre => introduccion a las bases
// ruta   => foto.jpg

//--> SE INCERTO UNA FILA CON UN DATO.
//--> ESTO GENERA UNA INSTRUCCION SQL de INSERCION PARA PHP:
// INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'introduccion a las bases', 'foto.jpg');

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