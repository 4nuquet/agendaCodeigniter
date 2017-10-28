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

	<div id="edit" class="container">
		<h1 class="text-center">Actualizar</h1>
		<?php foreach ($info as $value) { ?>
		<form method="post" action="<?= base_url();?>Edit/update/<?= $value->person_id?>" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">Nombre:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="name" value="<?= $value->person_name;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Apellido:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="lastname" value="<?= $value->person_lastname;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Direccion:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="address" value="<?= $value->person_address;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Telefono:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="phone" value="<?= $value->person_phone;?>">
				</div>
			</div>
			<div class="form-group">
       			<label class="control-label col-sm-2">Departamento:</label>
        		<div class="col-sm-8">
          			<input type="text" name="dpto" class="form-control" value="<?= $value->person_dpto;?>">
        		</div>
      		</div>
      		<div class="form-group">
        		<label class="control-label col-sm-2">Municipio:</label>
        		<div class="col-sm-8">
          			<input type="text" name="town" class="form-control" value="<?= $value->person_town;?>">
        		</div>
      		</div>
      		<?php } ?>
      		<div class="form-group">
      			<div class="row">
      				<button class="btn btn-default col-sm-offset-2" type="submit">Actualizar</button>
      			</div>
      		</div>
		</form>

	</div>


</body>
</html>