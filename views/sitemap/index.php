<!DOCTYPE html>
<html>
<title>Site Map</title>
<?php require 'views/header.php' ?>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/sitemap.css">
<body>
	<?php require 'views/nav.php' ?>


	<div class="container contenedor">

		<div id="sitemap">
			<h5>SITIO DEL MAPA</h5>

			<ul>
				<li>
					<a href="main">Inicio</a>

				</li>
				<li>
					<a href="about">Ayuda</a>
				</li>
			</ul>

			
		</div>





		<!--Incluir plantilla de footer -->
		<?php require 'views/footer.php' ?>
		
	</div>

</body>
</html>