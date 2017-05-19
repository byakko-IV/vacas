<!DOCTYPE html>
<html>
	<head>
		<title>Detalle Vaca</title>
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class='row'>
			<h2 class='text-center'>Vaca</h2>
			<div class='col-md-5 col-md-offset-1'>
				<table class='table table-bordered table-hover'>
					<thead>
						<tr>
							<th class='success'>
								Caracteristica
							</th>
							<th class='success'>
								Valor
							</th>
						</tr>
					</thead>
					<tr>
						<td>Raza</td>
						<td><?= $retorno['raza'] ?></td>
					</tr>
					<tr>
						<td>Codigo</td>
						<td><?= $retorno['codigo'] ?></td>
					</tr>
					<tr>
						<td>Fecha nacimiento</td>
						<td><?= $retorno['fecha_nacimiento'] ?></td>
					</tr>
				</table>
			</div>
		</div>
		<br>
		<h3 class='text-center'>Visitas</h3>
		<div class='row'>
			<div class='col-md-10 col-md-offset-1'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Hora y fecha</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($visitas as $visita): ?>
							<tr>
								<tr>
									<td><?= $visita['codigo'] ?></td>
									<td><?= $visita['fecha_hora'] ?></td>
								</tr>	
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>