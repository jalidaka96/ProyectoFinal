<?php 



class Categoria extends Controller{
	function __construct() {
		parent::__construct();
		
	}

	function cargarVista() {
		$this->view->cargar('categoria/index');
	}


	function migasCategoria() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		$condicion = 'categoria';

		require 'models/productomodel.php';

		$productos = new productoModel();
		ob_start();
		$result = $productos->showProductsCategoria($url[2], $condicion);
		ob_clean();

		require 'views/categoria/index.php';
		
	}

	function migasSubcategoria() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		$condicion = 'subcategoria';

		require 'models/productomodel.php';

		$productos = new productoModel();
		ob_start();
		$result = $productos->showProductsCategoria($url[2], $condicion);
		ob_clean();

		require 'views/categoria/index.php';
		
	}
}






?>