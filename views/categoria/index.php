<!DOCTYPE html>
<html>
<?php require 'views/header.php' ?>
<body>
	<?php require 'views/nav.php' ?>


	<div class="col-12" style="background-color: brown;" ng-controller="mainCtrl">
		<a class="migas" href="<?php echo constant('URL') ?>">Home</a>
		<span class="glyphicon glyphicon-chevron-right"></span>


		
		<a class="migas"  href="/proyecto/categoria/migasCategoria/<?php echo $row['categoria']; ?>" ><?php echo $url[2]; ?></a>



		
	</div>


	<div class="container">
		<div id="novedades" ng-hide="novedadesCapa">
			<h3><?php echo $url[2]; ?></h3>
			<div class="row">

		<?php 
			if (mysqli_num_rows($result) > 0) {
			    
			    while($row = mysqli_fetch_assoc($result)) {
			        ?> 

			        
						
						

						
						
							<div  class="col-6 col-lg-3">
								<div class="lastItems" >
									<a href="/proyecto/producto/detallesProducto/<?php echo $row['id_producto']; ?>">
										<img class="col-12" src="/proyecto/<?php echo $row['imagen']; ?>">
										<p><?php echo $row['nombre']; ?></p>
									</a>
									
									
								</div>
							
							</div>
						
					


			        <?php 
			    }
			} else {
			    echo "EN MANTENIMIENTO";
			}

		?>
			</div>
		</div>

	</div>

	<?php 

		
		


	?>

</body>
</html>