<?php
/**
 * Obtiene el detalle de un  vaca especificado por
 * su identificador "codigo"
 */

require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['codigo'])) {

        // Obtener parámetro codigo
        $parametro = $_GET['codigo'];

        // Tratar retorno
        $retorno = vaca::getById($parametro);

        if ($retorno) {

            $vaca["estado"] = "3";		// cambio "1" a 1 porque no coge bien la cadena.
            require 'formulario.php';
        } else {
            header('Location: index.php');
        }

    } else {
        header('Location: index.php');
    }
}

