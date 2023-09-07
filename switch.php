

<?php
if ($_POST){
//esta variable guarda los 3 botones
    $boton = $_POST['btnValor'];


//con el metodo switch podemos identificar cual preciono.
    switch ($boton) {

                //evalua el valor caso = valor, podemos pasar cualquier cosa, una funcion, un array9
        case 1:
            echo "el usuario presiono el boton 1";
            break;
        
        case 2:
            echo "el usuario presiono el boton 2";
            break;
        case 3:
            echo "el usuario presiono el boton 3";
            break;

    }

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
    <form action="switch.php" method="post">
        
        <input type="submit" name="btnValor" value="1">
        <BR />
        <input type="submit" name="btnValor" value="2">
        <BR />
    
        <input type="submit" name="btnValor" value="3">


    </form>
</body>

</html>