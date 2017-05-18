<?php
/**
 * Elimina una vaca de la base de datos
 * distinguido por su identificador
 */

require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo $_GET['codigo'];
    $retorno = vaca::delete($_GET['codigo']);

    if($retorno){
        header('Location: index.php');
    }
}
?>