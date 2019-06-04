<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/admin/adminCtrl.js"></script>

</head>
<body ng-app="miApp" ng-controller="adminCtrl">
	<!--################################# PAGINA EXLUSIVA PARA EL ADMINISTRADOR #################################-->
	<?php require 'views/header.php' ?>
	<?php require 'views/nav.php' ?>
	<?php require 'views/navsideadmin.php' ?>
	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/admin.css">


	<div class="container" >
		<div id="principal" ng-hide="principal">
			<h3>Panel de control para el administrador!</h3>
			<button class="btn btn-success offset-2" ng-click="usuariosMenu()"><p>Gestion Usuarios</p></button>
			<button class="btn btn-success offset-2 offset-md-2 col-md-pull-8" ng-click="productosMenu()"><p>Gestion Productos</p></button>
		</div>

		<button class="btn btn-info offset-md-3 offset-lg-6" ng-click="principalButon()" ng-show="principalGButon">Volver al panel principal</button>
		<button class="btn btn-info " ng-click="productosMenu()" ng-show="principalGP">Gestion Productos</button>
		<button class="btn btn-info " ng-click="usuariosMenu()" ng-show="principalGU">Gestion Usuarios</button>
		


		<!--CAPA PARA MOSTRAR EL PANEL DE ADMINISTRACION DEL USUARIO -->
		<div ng-show="usuarioShow" >
			<br><br>
		    <div class="input-group">
		    	<input type="text" class="form-control form-text" placeholder="Buscar.." ng-model="busqueda">
		    </div><br><br><hr>
			
			
			<!-- MOSTRAR TODOS LOS USUARIOS EXISTENTES EN EL SISTEMA-->
			<table class="table table-striped table-hover">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Nombre de usuario</th>
				</tr>
				<tr ng-repeat="x in usuarios | filter : busqueda">
					<td>{{x.nombre}}</td>
					<td>{{x.apellido}}</td>
					<td>{{x.usuario}}</td>
					<td>
						<!-- BOTON PARA MOSTRAR LOS DETALLES DEL USUARIO-->
						<button class="btn btn-primary" ng-click="config_user(x.usuario)"><span class="glyphicon glyphicon-cog"></span></button>
					</td>
				</tr>
			</table>
		</div>

		<!-- CAPA QUE RECOGE TODOS LOS DETALLES DEL USUARIO Y EN LA CUAL SE VA A MODER HACER EL CRUD DE ESE USUARIO-->
		<div ng-show="detallesShow" id="detallesShow">
			<h5>Detalles del usuario "{{detalleUsuario.usuario}}"</h5>
			<table class="table table-bordered">
				<tr>
					<th>Nombre</th>
					<td class="detailColumn">
						<p ng-hide="nombreP">{{detalleUsuario.nombre}}</p>
						<input type="text" ng-model="detalleUsuario.nombre" ng-show="nombreM">
					</td>

				</tr>
				<tr>
					<th>Apellido</th>
					<td class="detailColumn">
						<p ng-hide="apellidoP">{{detalleUsuario.apellido}}</p>
						<input type="text" ng-model="detalleUsuario.apellido" ng-show="apellidoM">
					</td>
				</tr>
				<tr>
					<th>Nombre de usuario</th>
					<td class="detailColumn">
						<p id="user" ng-hide="usuarioP">{{user}}</p>
						<input type="text" ng-model="detalleUsuario.usuario" ng-show="usuarioM">
						
					</td>
				</tr>
				<tr>
					<th>Telefono</th>
					<td class="detailColumn">
						<p ng-hide="telefonoP">{{detalleUsuario.telefono}}</p>
						<input type="text" ng-model="detalleUsuario.telefono" ng-show="telefonoM">
					</td>
				</tr>
				<tr>
					<th>Correo</th>
					<td class="detailColumn">
						<p ng-hide="correoP">{{detalleUsuario.email}}</p>
						<input type="text" ng-model="detalleUsuario.email" ng-show="correoM">
					</td>
				</tr>
				<tr>
					<th>Fecha nacimiento</th>
					<td class="detailColumn">
						<p ng-hide="fecha_nacP">{{detalleUsuario.fecha_nac}}</p>
						<input type="text" ng-model="detalleUsuario.fecha_nac" ng-show="fecha_nacM">
					</td>
				</tr>
				<tr>
					<th>Fecha registro</th>
					<td class="detailColumn">{{detalleUsuario.fecha_creacion_usuario}}</td>
				</tr>
			</table>
			<!-- ESTOS BOTONES 3 SON PARA PODER MODIFICAR, ELIMINAR Y GUARDAR LOS CAMBIOS REALIZADOS -->
			<button class="btn btn-success" ng-show="guardar" ng-click="guardarCambios()">Guardar cambios</button>
			<button class="btn btn-primary" ng-hide="modificarH" ng-click="modificar(true)">Modificar</button>
			<button class="btn btn-primary" ng-hide="eliminarH" ng-click="eliminar(detalleUsuario.usuario)">Dar de baja</button>

			<button class="btn btn-success" ng-click="atrasU()"><span class="glyphicon glyphicon-arrow-left" id="atrasU" ></span></button>
		</div>



		<!--CAPA PARA MOSTRAR EL PANEL DE ADMINISTRACION DE LOS PRODUCTOS -->
		<div ng-show="productoShow" >
			Productos

			<!-- CAPA EN LA CUAL SE PUEDE VISUALIZAR TODOS LOS PRODUCTOS QUE HAY EN EL SISTEMA Y PODER ORDENARLOS POR CATEGORIA-->
			<div>
				<h4>¿QUÉ DESEA HACER?</h4>
				<hr>
				<button class="btn btn-primary" ng-click="mostrarProductos()" ng-hide="mostrarTodos">Mostrar todos los productos <span class="glyphicon glyphicon-search" ></button>
				
				<button class="btn btn-primary" ng-click="todos()" ng-show="categoriaOr">TODOS</button>
				<button class="btn btn-primary" ng-click="categoriaO()" ng-show="categoriaOr"><span class="d-none d-lg-inline">ORDENADORES</span> <span class="glyphicon glyphicon-hdd "></span></button>
				<button class="btn btn-primary" ng-click="categoriaM()" ng-show="categoriaMo"><span class="d-none d-lg-inline">MOVILES</span> <span class="glyphicon glyphicon-phone "></span></button>
				<button class="btn btn-primary" ng-click="categoriaP()" ng-show="categoriaPe"><span class="d-none d-lg-inline">PERIFERICOS</span> <span class="glyphicon glyphicon-print "></span></button>
				<button class="btn btn-primary  offset-md-2" ng-click="subirButon()" ><span class="">Subir </span> <span class="glyphicon glyphicon-cloud-upload"></span></button>
			</div>

			<?php include 'views/productos/productos.php'; ?>
		</div>

		<!-- CAPA EN LA CUAL SE VAN A RECOGER TODA LA INFRMACION DE UN PRODUCTO SELECCIONADO Y PODER DARLE DE BAJA O MODIFICARLO-->
		<div ng-show="detallesItem">
			<h5>Detalles del producto "{{detalleProducto.nombre}}"</h5>
			<!--<div id="divImagenItem">
				<img id="imagenDetalleItem" class="col-md-3 offset-3" src="{{detalleProducto.imagen}}">
				
			</div>-->

			<table class="table table-bordered">
				<tr>
					<th>Identificador</th>
					<td>{{detalleProducto.id_producto}}</td>
				</tr>

				<tr>
					<th>Nombre</th>
					<td >
						<p ng-hide="itemNombreP">{{detalleProducto.nombre}}</p>
						<input type="text" ng-model="detalleProducto.nombre" ng-show="itemNombreM">
					</td>
					
				</tr>

				<tr>
					<th>Descripción</th>
					<td>
						<p ng-hide="itemDetalleP">{{detalleProducto.detalle}}</p>
						<input type="text" ng-model="detalleProducto.detalle" ng-show="itemDetalleM">
					</td>
				</tr>

				<tr>
					<th>Precio</th>
					<td>
						<p ng-hide="itemPrecioP">{{detalleProducto.precio}}</p>
						<input type="text" ng-model="detalleProducto.precio" ng-show="itemPrecioM">
					</td>
				</tr>

				<tr>
					<th>Categoría</th>
					<td>
						<select class="form-control" ng-model="detalleProducto.categoria" ng-show="itemCategoriaM">
							<option value="ordenadores">Ordenadores</option>
							<option value="moviles">Moviles</option>
							<option value="perifericos">Periféricos</option>
						</select>
						<p ng-hide="itemCategoriaP">{{detalleProducto.categoria}}</p>
						<!--<input type="text" ng-model="detalleProducto.categoria" ng-show="itemCategoriaM">-->
					</td>
				</tr>

				<tr>
					<th>Subcategoría</th>
					<td>
						<p ng-hide="itemSubcategoriaP">{{detalleProducto.subcategoria}}</p>
						<input type="text" ng-model="detalleProducto.subcategoria" ng-show="itemSubcategoriaM">
					</td>
				</tr>
			</table>

			<button class="btn btn-success" ng-show="guardarModificacionItem" ng-click="guardarCambiosItem()">Guardar cambios</button>
			<button class="btn btn-primary" ng-hide="modificarItemP" ng-click="modificarItem(true)">Modificar</button>
			<button class="btn btn-primary" ng-hide="eliminarItem" ng-click="confirmarEliminar()">Eliminar</button>

			<button class="btn btn-success" ng-click="atrasP()"><span class="glyphicon glyphicon-arrow-left" id="atrasP" ></span></button>

			<div ng-show="confirmarDelete">
				<hr>
				<p>Se va a proceder a eliminar este producto, ¿ESTAS SEGURO?</p>
				<button class="btn btn-success" ng-click="eliminarItemF(detalleProducto.id_producto)">Confirmar</button>
				<button class="btn btn-danger" ng-click="cancelarEliminar()">Cancelar</button>
			</div>
		</div>
	</div>
</body>
</html>