
<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="Es">
<head>
		
	<title>Formulario</title>
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

	<div id="create" class="container">
		<h1 class="text-center">Registrar Persona</h1>
		<form method="post" action="<?= base_url();?>Form/create" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">Nombre:</label>
				<div class="col-sm-8">
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Apellido:</label>
				<div class="col-sm-8">
					<input type="text" name="lastname" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Direccion:</label>
				<div class="col-sm-8">
					<input type="text" name="address" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Telefono:</label>
				<div class="col-sm-8">
					<input type="text" name="phone" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Departamento:</label>
				<div class="col-sm-8">
					<input type="test" name="dpto" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Departamento:</label>
				<div class="col-sm-8">
					<input type="text" name="town" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<button class="btn btn-default col-sm-offset-2" type="submit">Crear</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>