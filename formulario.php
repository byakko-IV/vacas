<!DOCTYPE html>
<html>
<head>
	<title>Nueva Vaca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="col-md-8  col-md-offset-2">
		<h1>Nueva vaca</h1>
		<form method="POST" action="actualizar_vaca.php">
			<div class="form-group">
				<label for="codigo" class="control-label">Codigo</label>
				<input id="codigo" type="text" name="codigo" class="form-control" value="<?= $retorno['codigo'] ?>">
			</div>
			<div class="form-group">
				<label for="peso" class="control-label">Peso</label>
				<input id="peso" type="text" name="peso" class="form-control" value="<?= $retorno['peso'] ?>">
			</div>
			<div class="form-group">
				<label for="escala" class="control-label">Escala</label>
				<input id="escala" type="text" name="escala" class="form-control" value="<?= $retorno['escala'] ?>">
			</div>
			<div class="form-group">
				<label for="estado" class="control-label">Estado</label>
				<input id="estado" type="text" name="estado" class="form-control" value="<?= $retorno['estado'] ?>">
			</div>
			<div class="form-group">
				<label for="fecha_parto" class="control-label">fecha parto</label>
				<input id="fecha_parto" type="text" name="fecha_parto" class="form-control" value="<?= $retorno['fecha_parto'] ?>">
			</div>
			<div class="form-group">
				<label for="fecha_inicio_produccion" class="control-label">fecha de inicio de produccion</label>
				<input id="fecha_inicio_produccion" type="text" name="fecha_inicio_produccion" class="form-control" value="<?= $retorno['fecha_inicio_produccion'] ?>">
			</div>
			<div class="form-group">
				<label for="tiempos_alimentacion" class="control-label">Tiempos de alimentacion</label>
				<input id="tiempos_alimentacion" type="text" name="tiempos_alimentacion" class="form-control" value="<?= $retorno['tiempos_alimentacion'] ?>">
			</div>
			<div class="form-group">
				<label for="tratamiento" class="control-label">Tratamiento</label>
				<input id="tratamiento" type="text" name="tratamiento" class="form-control" value="<?= $retorno['tratamiento'] ?>">
			</div>
			<div class="form-group">
				<input type="submit" value="Guardar" class='btn btn-info'>
			</div>
		</form>
	</div>
</body>
</html>