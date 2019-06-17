
<!DOCTYPE html>
<html>
<?php require 'views/header.php' ?>
<body class="detalleContainer" ng-app="miApp" ng-controller="detalleItemCtrl">
	<?php require 'views/nav.php' ?>
	<?php require_once 'models/productomodel.php'; ?>
	
	<script src="/proyecto/public/angular/angular.js"></script>
	<script src="/proyecto/public/angular/appModule.js"></script>
	<script src="/proyecto/public/angular/main/detalleItemCtrl.js"></script>
	<script src="/proyecto/public/angular/main/mainCtrl.js"></script>
	<link rel="stylesheet" type="text/css" href="/proyecto/public/css/detalle.css">
	

	
	<div class="col-12" style="background-color: brown;" ng-controller="mainCtrl">
		<a class="migas" href="<?php echo constant('URL') ?>">Home</a>
		<span class="glyphicon glyphicon-chevron-right"></span>



		<a class="migas"  href="/proyecto/categoria/migasCategoria/<?php echo $row['categoria']; ?>" ><?php echo $row['categoria']; ?></a>



		<span class="glyphicon glyphicon-chevron-right"></span>
		<a class="migas" href="/proyecto/categoria/migasSubcategoria/<?php echo $row['subcategoria']; ?>" ><?php echo $row['subcategoria']; ?></a>
	</div>

	<!-- PAGINA QUE MUESTRA LOS DETALLES DE UN PRODUCTO SELECCIONADO EN LA PAGINA PRINCIPAL-->
	<div class="container">

		<div class="row detalleItem">

			<!--<img id="imagenmacho" class="col-8 offset-2 offset-md-0 col-md-4 " src="<?php echo constant('URL'); ?><?php echo $row['imagen'] ?>">-->
			<div id="capaImagen" class="col-10 offset-1 offset-md-0 col-md-5">
				<img class=" imagenItem col-12" src="<?php echo constant('URL'); ?><?php echo $row['imagen']; ?>">
			</div>
			
			<!-- LA VARIABLE $row SE HA CREADO EN EL CONTROLADOR PRODUCTO Y ES POSIBLE SU USO AQUI GRACIAS A QUE HEMOS PASADO EL ID PRODUCTO COMO PARAMETRO -->
			<div class="masDetalles col-10 offset-1 offset-md-0 col-md-6">
				<p  class="nombreItem"><?php echo $row['nombre']; ?></p>
				<p class="precioItem"><?php echo $row['precio']; ?>€</p><hr>
				<p class="descripcionItem"><?php echo $row['detalle']; ?></p><hr>


				

				

				<!-- ESTA SECCION SON 3 BOTONES QUE SON LA DE COMENTAR, LIKE Y DISLIKE, POR LO TANTO DEPENDIENDO DE SI EL USUARIO HA INICIADO SESION SE 
					LE PODRA DAR ACCESO A ESOS BOTONES Y PODER COMENTAR Y VALORAR UN DETERMINADO PRODUCTO-->
				<?php 

					if (isset($_SESSION['usuario'])) {
						?>
						<?php 
						if ($row2 == $_SESSION['usuario']) {
							?><button class="btn btn-success" ng-click="enCesta()"><span class="d-none d-lg-block" >En cesta</span> <span class="glyphicon glyphicon-shopping-cart d-lg-none"></span></button><?php 
						} else {
							?><button  class="btn btn-primary" ng-click="anadirCarrito(<?php echo $row['id_producto'] ?>, <?php echo $row['precio'] ?>)" ng-hide="botones"><span class="d-none d-lg-block" >Añadir a cesta</span> <span class="glyphicon glyphicon-shopping-cart d-lg-none"></span></button><?php 
						}
						?>
						
						



						<button class="btn btn-primary offset-2 offset-md-1 offset-lg-1 offset-xl-3" ng-click="mostrarComentar()"  ng-hide="botones"><span class="glyphicon glyphicon-comment"></span></button>

						<?php if ($puntuacionTotal['positiva'] == 'OK') {
							?> 
								<button ng-click="cancelarPositiva(<?php echo $row['id_producto']; ?>)" class="btn btn-success" ng-hide="botones"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<?php 
						} elseif ($puntuacionTotal['negativa'] == 'OK') {
							?> 
								<button ng-click="cancelarNegativa(<?php echo $row['id_producto']; ?>)" class="btn btn-danger" ng-hide="botones"><span class="glyphicon glyphicon-thumbs-down"></span></button>
							<?php 
						} else {
							?> 
								<button ng-click="positiva(<?php echo $row['id_producto']; ?>)" class="btn btn-success" ng-hide="botones"><span class="glyphicon glyphicon-thumbs-up"></span></button>
								<button ng-click="negativa(<?php echo $row['id_producto']; ?>)" class="btn btn-danger" ng-hide="botones"><span class="glyphicon glyphicon-thumbs-down"></span></button>

							<?php 
						} ?>
						


						
						<?php 
					}

				?>
				

				
				</div>
				<!-- ESTA CAPA SE MUESTRA AL DARLE AL BOTON COMENTAR Y ES UN PEQUEÑO FORMULARIO PARA PODER INGRESAR UN COMENTARIO-->
				<div class="form-group col-10 offset-1 col-md-11 offset-md-0" ng-show="campoComentar">
					<form >
						<label for="comment">Comment:</label>
				 		<textarea class="form-control"  id="comment" ng-model="comentario"></textarea>
				 		<button class="btn btn-success" ng-click="comentar(<?php echo $row['id_producto']; ?>)">Comentar</button>
				 		<button class="btn btn-danger" ng-click="cancelar()">Cancelar</button>
					</form>
				  
				  
				  

				</div>
				<!-- SI EL COMENTARIO NO SE PUBLICA CORRECTAMENTE SE DEVUELVE UN MENSAJE DE ERROR-->
				<p ng-show="errorPublicar">Error al publicar el comentario, intentelo de nuevo!</p>
				
			</div>



			<!-- ESTA PARTE ES PARA PODER VER LOS COMENTARIOS, EL NUMERO DE COMENTARIO, EL NUMERO DE ME GUSTA Y EL NUMERO DE NO ME GUSTA-->
		<div class="row">

			<a ng-hide="abajo" id="buttonShowComments" class="col-10 offset-1 offset-md-0 col-md-11"  ng-click="verComentarios(<?php echo $row['id_producto']; ?>)">
				<?php echo $cantidad['COUNT(*)']; ?> comentarios, <?php echo $obtenerPuntuacionPositiva['COUNT(*)']; ?> votos positivos y <?php echo $obtenerPuntuacionNegativa['COUNT(*)']; ?> negativos
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>

			<a ng-show="arriba" id="buttonShowComments" class="col-10 offset-1 offset-md-0 col-md-11"  ng-click="ocultarComentarios()">
				<?php echo $cantidad['COUNT(*)']; ?> comentarios, <?php echo $obtenerPuntuacionPositiva['COUNT(*)']; ?> votos positivos y <?php echo $obtenerPuntuacionNegativa['COUNT(*)']; ?> negativos
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

			<p ng-show="vacio">NO HAY COMENTARIOS!</p>
			<div ng-show="vistaComentarios" class="col-12 col-md-11">
				<!-- LISTADO DE TODOS LOS COMENTARIOS-->
				<div ng-repeat="x in listadoComentarios  track by $index" class="divListado">
					<p id="usuario">Usuario: <span>{{x.usuario}}</span></p>
					<hr>
					<div>
						{{x.descripcion}}
					</div>
					<p>Fecha de publicacion; <span>{{x.fecha_publicacion}}</span></p>
					
				</div>
			</div>
		</div>

		</div>

		

		
		

	</div>


</body>
</html>