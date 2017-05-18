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
        vaca::setVisit($parametro);


        if ($retorno) {

            $vaca["estado"] = "3";		// cambio "1" a 1 porque no coge bien la cadena.
            $vaca["vaca"] = $retorno;
            // Enviar objeto json de la vaca
            print json_encode($vaca);
        } else {
            // Enviar respuesta de error general
            print json_encode(
                array(
                    'estado' => '2',
                    'mensaje' => 'No se obtuvo el registro'
                )
            );
        }

    } else {
        // Enviar respuesta de error
        print json_encode(
            array(
                'estado' => '3',
                'mensaje' => 'Se necesita un identificador'
            )
        );
    }
}

