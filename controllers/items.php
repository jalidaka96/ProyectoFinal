<?php 


//CONTROLADOR ITEMS PARA LOS PRODUCTOS, PRECISAMENTE 
class Items extends Controller{
	function __construct() {
		parent::__construct();
	
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('productos/detalles');
	}

	
	function show() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$this->view->cargar('productos/detalles');
	}
}






?>