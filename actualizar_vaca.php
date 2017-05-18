<?php
/**
 * Actualiza una vaca especificado por su identificador
 */

require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);

    // Actualizar vaca
    $retorno = vaca::update(
        $_POST['codigo'],
	    $_POST['peso'],
		$_POST['escala'],
		$_POST['estado'],
	    $_POST['fecha_parto'],
		$_POST['fecha_inicio_produccion'],
		$_POST['tiempos_alimentacion'],
	    $_POST['tratamiento']);

    if ($retorno) {
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}
?>
