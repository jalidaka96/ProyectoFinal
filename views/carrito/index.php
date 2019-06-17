<!DOCTYPE html>
<html>
<?php require 'views/header.php' ?>
<body>
	

	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/carrito/carritoCtrl.js"></script>

	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/carrito.css">
	
	<?php require 'views/nav.php' ?>


	<div class="container" ng-app="miApp" ng-controller="carritoCtrl">


		<!--CAPA DIV DONDE APARECEN TODOS LOS DETALLES DEL CARRITO-->
		<div class="row" id="carrito" ng-hide="carritoTodo">
			<!--CAPA PARA MOSTRAR UNA TABLA CON UNA LISTA DE LOS ARTICULOS QUE ESTAN EN LA CESTA UTILIZANDO ANGULAR-->
			<div class="col-md-12 col-lg-7" id="detalleCarrito">
				<h3>Articulos en cesta ({{cantidad}})</h3>

				<div ng-hide="vacio">
					<hr>
					<h2>No hay articulos en cesta!</h2>
					<a href="main">Visita nuestra seccion de productos para poder añadir productos al carrito</a>
				</div>
				
				<table class="table" ng-show="tablaCarrito">
					
					<tr class="table-secondary">
						<th>Producto</th>
						<th>Precio</th>
						<th></th>
					</tr>
					<tr ng-repeat="x in carrito">
						<td>{{x.nombre}}</td>
						<td><b>{{x.precio}}€</b></td>
						<td>
							<a class="quitar" href="" ng-click="eliminarCesta(x.id_producto, x.usuario)"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					<tr>
						<td><br><a href="" ng-show="deleteAll" ng-click="eliminarTodo()" id="vaciarCesta">Vaciar cesta <span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					
				</table>
			</div>

			<!--PARTE DONDE SE MUESTRA EL PRECIO TOTAL DE LOS PRODUCTOS QUE HAY EN EL CARRITO Y UN BOTON PARA PODER REALIZAR LA COMPRA-->
			<div class="col-md-12 col-lg-4 offset-lg-1" id="tramite">
				<p>Con TeknoMel puedes obtener descuentos y beneficios en tus compras gracias a la tarifa premium que ofrecemos!</p>
				<hr>
				<p><b>TOTAL</b> <span class="offset-8 offset-md-8 offset-lg-7 "><b>{{total}} €</b></span></p>
				<hr>
				<button class="btn btn-info" ng-click="realizarPedido()">Realizar pedido</button>
				<a href="main" class="btn btn-info" >Seguir comprando</a>

			</div>
		</div>
		
		
		<!--AL PULSAR EN EL BOTON DE REALIZAR PEDIDO NOS MOSTRARA UN RECUADRO PARA PODER SELECCIONAR NUESTRA FORMA DE PAGO-->
		<div ng-show="formaDePago" class="col-12 col-md-9 offset-md-1" id="formaDePago">
			<b>Elige una forma de pago</b><hr>
			<div class="offset-3 offset-lg-4"  id="paypal-button-container"></div>

			<hr>

			<button class="btn btn-danger col-md-6" ng-click="cancelarPago()">Cancelar</button>
		</div>




		


		



	</div>



</body>
</html>