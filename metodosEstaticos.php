<?php 
// MEJORES FORMAS DEL MANEJO DE LAS CLASES - METODOS ESTATICOS
//estos pueden llamarse sin tener una instancia - sin la creacion de un objeto

class amigos {
    //propiedades

    //nada

    //metodos
    public static function mostrar () {
        echo 'soy un metodo estatico';
    }

}

// ya a este metodo lo puedo llamar sin crear la instancia
amigos::mostrar()

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