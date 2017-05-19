<?php
require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['codigo'])) {
        $parametro = $_GET['codigo'];
        $retorno = vaca::getById($parametro);
        $visitas = vaca::getVisits($parametro);
        if ($retorno) {
            require 'layout.php';
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

