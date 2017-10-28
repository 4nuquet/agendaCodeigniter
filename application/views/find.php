
<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head lang="es">
	<title>Buscar</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/
  	bootstrap/3.3.6/js/bootstrap.min.js"></script>

  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/styles.css">
</head>

<body data-spy="scroll" data-taget=".navbar" data-offset="50">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="">Agenda</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url();?>Form">Registrar</a></li>
					<li><a href="<?= base_url();?>Find">Buscar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="find" class="container">
		<h1 class="text-center">Buscar</h1>
		<form method="post" action="<?=base_url();?>Find/search" class="form-horizontal">
			<div class="form-group container">
				<div class="col-sm-2">
					<select class="form-control" name="typeSearch">
						<option>Nombre</option>
						<option>Apellido</option>
						<option>Telefono</option>
					</select>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="contentSearch">
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default" type="submit">Buscar</button>

				</div>
			</div>
		</form>
		<div class="container">
			<table class="table">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Departamento</th>
					<th>Municipio</th>
					<th colspan="2"></th>
				</tr>
				<?php foreach ($data as $value) {?>
				<tr>
					<td><?= $value->person_name;?></td>
					<td><?= $value->person_lastname;?></td>
					<td><?= $value->person_address;?></td>
					<td><?= $value->person_phone;?></td>
					<td><?= $value->person_dpto;?></td>
					<td><?= $value->person_town;?></td>
					<td><a class="glyphicon glyphicon-edit" href="<?= base_url();?>Edit/index/<?= $value->person_id;?> "></a></td>
					<td><a class="glyphicon glyphicon-remove" href="<?= base_url();?>Find/delete/<?= $value->person_id?>" ></a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<div class="modal fade" id="modal" role="dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1 class="model-title">Advertencia</h1>
			</div>
			<div class="modal-body">
				<p>Esta seguro de elimiar a: </p>
				<h3>Nombre</h3>
			</div>
			<div class="modal-footer">
				<form>
					<button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>