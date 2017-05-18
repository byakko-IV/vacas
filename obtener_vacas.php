<?php
/**
 * Obtiene todas los vacas de la base de datos
 */

require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    $vaca = vaca::getAll();

    if ($vaca) {

        $datos["estado"] = "1";
        $datos["vaca"] = $vaca;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => "2",
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}

