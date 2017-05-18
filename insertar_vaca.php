<?php
/**
 * Insertar un nueva vaca en la base de datos
 */

require 'vaca.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    
    // Insertar vaca
    $retorno = vaca::insert(
        $_POST['codigo'],
	    $_POST['peso'],
		$_POST['escala'],
		$_POST['estado'],
	    $_POST['fecha_parto'],
		$_POST['fecha_inicio_produccion'],
		$_POST['tiempos_alimentacion'],
	    $_POST['tratamiento']);
       
    if ($retorno) {
        $json_string = json_encode(array("estado" => "1","mensaje" => "Creacion correcta"));
		echo $json_string;
    } else {
        $json_string = json_encode(array("estado" => "2","mensaje" => "No se creo el registro"));
		echo $json_string;
    }
}

?>