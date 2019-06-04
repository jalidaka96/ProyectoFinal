<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/producto/productoCtrl.js"></script>

</head>
<body ng-app="miApp" ng-controller="productoCtrl">
	<?php require 'views/header.php'; ?>
	<?php require 'views/nav.php'; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/registroProducto.css">
	<!-- PAGINA CON UN FORMULARIO PARA SUBIR PRODUCTOS AL SISTEMA Y ESTE FORMULARIO ES ACCESIBLE UNICAMENTE POR EL ADMINISTRADOR-->
	<div class="container">
		
		<h2>FORMULARIO PARA SUBIR UN PRODUCTO NUEVO</h2>
		<hr>

		<form class="col-sm-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2" id="formProducto" action="<?php echo constant('URL'); ?>producto/subirProducto" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nombre: </label>
				<input type="text" class="form-control"  placeholder="Introduzca el nombre del producto..."   name="nombre">
			</div>
		
			<div class="form-group">
				<label>Descripcioin: </label>
				<textarea class="form-control" placeholder="Añade una descripcion del producto..."  maxlength="150" name="descripcion"></textarea>
			</div>
		
			<div class="form-group">
				<label>Precio:</label>
				<input type="text" class="form-control"  placeholder="Introduzca un precio" pattern="[0-9]*"  name="precio" >
			</div>

			<!-- CAMPO CHECKBOX PARA CATEGORIA, HAY TRES Y DEPENDE DE LA CATEGORIA QUE SE ESCOJA SE MOSTRARA OTRO CHECKBOX
				QUE ES LA SUBCATEGORIA CORRESPONDIENTE A ESA CATEGORIA-->
			<div class="form-group">
				<label>Categoria:</label>
				<select class="form-control" ng-model="seleccionado" ng-change="eleccion()" name="categoria">
					<option value="ordenadores">Ordenadores</option>
					<option value="moviles">Moviles</option>
					<option value="perifericos">Periféricos</option>
				</select>
			</div>
			
			<div class="form-group" ng-show="subcategoriaOrdenadores" >
				<label>Subcategoria:</label>
				<select class="form-control" name="subcategoriaO">
					<option>Elegir...</option>
					<option>-De Mesa-</option>
					<option>-Portatiles-</option>
				</select>
			</div>

			<div class="form-group" ng-show="subcategoriaMoviles">
				<label>Subcategoria:</label>
				<select class="form-control" name="subcategoriaM">
					<option>Elegir...</option>
					<option>-Android-</option>
					<option>-IOS-</option>
				</select>
			</div>

			<div class="form-group" ng-show="subcategoriaPerifericos">
				<label>Subcategoria:</label>
				<select class="form-control" name="subcategoriaP">
					<option>Elegir...</option>
					<option>-Monitores-</option>
					<option>-Teclados-</option>
					<option>-Ratones-</option>
					<option>-Impresoras-</option>
					<option>-Altavoces-</option>
				</select>
			</div>
		
			<div class="input-group">
				<div class="input-group-pretend">
					<span class="input-group-text" id="inputGroupFIleAddon01">Subir</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFIleAddon01"  name="imagen">
					<label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
				</div>
			</div>
			<br>
			<button type="submit"  class="btn btn-primary col-6  col-md-4 offset-3 offset-md-4">Registrar</button>
		</form>

	</div>
</body>
</html>