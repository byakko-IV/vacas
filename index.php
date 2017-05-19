<?php
require 'vaca.php';

$vacas = vaca::getAll();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Identificador de Ganado</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>

  <body>
    <h1 class="text-center">Registro de bacas</h1>
    <div class="row" style="margin-top:10%">
       <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover table striped">
            <thead>
                 <tr>
                     <th>Codigo</th>
                     <th>Raza</th>
                     <th>Fecha nacimiento</th>
                     <th>Peso</th>
                     <th>Escala</th>
                     <th>Estado</th>
                     <th>Fecha de Parto</th>
                     <th>Fecha de Inicio de Produccion</th>
                     <th>Tiempos de Alimentacion</th>
                     <th>Tratamiento</th>                
                 </tr>
            </thead>
              <tbody>
                  <?php if ($vacas): ?>
                 		 <?php foreach($vacas as $vaca): ?>
                                  <tr> 
                                      <td><?= $vaca['codigo'] ?></td>
                                      <td><?= $vaca['raza'] ?></td>
                                      <td><?= $vaca['fecha_nacimiento'] ?></td>
                                      <td><?= $vaca['peso'] ?></td>
                                      <td><?= $vaca['escala'] ?></td>
                                      <td><?= $vaca['estado'] ?></td> 
                                      <td><?= $vaca['fecha_parto'] ?></td>
                                      <td><?= $vaca['fecha_inicio_produccion'] ?></td>
                                      <td><?= $vaca['tiempos_alimentacion'] ?></td>
                                      <td><?= $vaca['tratamiento'] ?></td>
                                      <td>
                                        <a href="detalle_vaca.php?codigo=<?= $vaca['codigo'] ?>">Detalle</a>
                                        <a href="borrar_vaca.php?codigo=<?= $vaca['codigo'] ?>">Eliminar</a>
                                        <a href="modificar_vaca.php?codigo=<?= $vaca['codigo'] ?>">Editar</a>
                                      </td>
                                   </tr> 
                  		<?php endforeach ?>
                  <?php endif; ?>
               </tbody>
            </table>
            <a href="nueva.html" class="btn btn-success">Agragar Vaca</a>
        </div>
    </div>
  </body>
</html>
