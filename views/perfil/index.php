<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/perfil/perfilCtrl.js"></script>
</head>
<body ng-app="miApp" ng-controller="perfilCtrl">
	<?php require 'views/header.php' ?>
	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/perfil.css">
	<?php require 'views/nav.php' ?>
	<div class="col-12" style="background-color: brown;">
		<a class="migas" href="<?php echo constant('URL') ?>">Home</a>
		<span class="glyphicon glyphicon-chevron-right"></span>
		<a class="migas" href="<?php echo constant('URL') ?>perfil">Mi Perfil</a>
	</div>
	<!-- PAGINA DE PERFIL DEL USUARIO-->
	<div class="container">

		<div>

			<h2>Mis Datos</h2>	
			<p ng-init="usuario=['<?php echo $_SESSION['usuario']; ?>']"></p>
			
			<hr>
			<!-- ESTA CAPA ES UN BREVE RESUMEN SOBRE EL USUARIO, SE INCLUYE BOTON PARA MOSTRAR LOS DETALLES COMPLETOS DEL USUARIO
				Y PODER MODIFICAR SUS DATOS E INCLUSO DARSE DE BAJA-->
			<div ng-repeat="x in usuario">
				<span>Nombre de usuario: <?php echo $_SESSION['usuario']; ?></span>
				<button class="btn btn-primary offset-5" ng-hide="mostrarButon" ng-click="mostrar(x)">Mostrar todos los datos</button>
				<!-- OCULTAR TODOS LOS DATOS-->
				<button class="btn btn-primary offset-5" ng-show="ocultarButon" ng-click="ocultar()">Ocultar</button>
			</div>
			
			<hr>
			<!-- CAPA EN LA CUAL SE RECOGEN TODOS LOS DATOS DEL USUARIO, Y SE MUESTRA AL DARLE AL BOTON DE MOSTRAR TODOS LOS DATOS-->
			<div ng-show="detallesShow">
				<h5>Detalles del usuario "{{detalleUsuario.usuario}}"</h5>
				<table class="table table-bordered">
					<tr>
						<th>Nombre</th>
						<td>
							<p ng-hide="nombreP">{{detalleUsuario.nombre}}</p>
							<input type="text" ng-model="detalleUsuario.nombre" ng-show="nombreM">
						</td>

					</tr>
					<tr>
						<th>Apellido</th>
						<td>
							<p ng-hide="apellidoP">{{detalleUsuario.apellido}}</p>
							<input type="text" ng-model="detalleUsuario.apellido" ng-show="apellidoM">
						</td>
					</tr>
					<tr>
						<th>Nombre de usuario</th>
						<td>
							<p id="user" ng-hide="usuarioP">{{user}}</p>
							<input type="text" ng-model="detalleUsuario.usuario" ng-show="usuarioM">
							
						</td>
					</tr>
					<tr>
						<th>Telefono</th>
						<td>
							<p ng-hide="telefonoP">{{detalleUsuario.telefono}}</p>
							<input type="text" ng-model="detalleUsuario.telefono" ng-show="telefonoM">
						</td>
					</tr>
					<tr>
						<th>Correo</th>
						<td>
							<p ng-hide="correoP">{{detalleUsuario.email}}</p>
							<input type="text" ng-model="detalleUsuario.email" ng-show="correoM">
						</td>
					</tr>
					<tr>
						<th>Fecha nacimiento</th>
						<td>
							<p ng-hide="fecha_nacP">{{detalleUsuario.fecha_nac}}</p>
							<input type="text" ng-model="detalleUsuario.fecha_nac" ng-show="fecha_nacM">
						</td>
					</tr>
					<tr>
						<th>Fecha registro</th>
						<td>{{detalleUsuario.fecha_creacion_usuario}}</td>
					</tr>
				</table>
				<button class="btn btn-success" ng-show="guardar" ng-click="guardarCambios()">Guardar cambios</button>
				<button class="btn btn-primary" ng-hide="modificarH" ng-click="modificar(true)">Modificar</button>
				<button class="btn btn-primary" ng-hide="eliminarH" ng-click="eliminar(detalleUsuario.usuario)">Dar de baja</button>
			</div>
		</div>
	</div>
</body>
</html>