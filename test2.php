<?php
session_start();

$id = $_GET["id"] ;
 $_SESSION ["datosGuardados"] [] = $id ;


function imprimirLista () {
    $lista = $_SESSION ["datosGuardados"] ;

    foreach ($lista as $numero) {
        print_r ("Ingrese al array y tengo el ID: ".$numero."<br/>");
    }
}

imprimirLista();

?>

<a href="index2.html"><input type="button" value="Volver para agregar otro valor por URL"></a>