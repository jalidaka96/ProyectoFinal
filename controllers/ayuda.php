<?php 



class Ayuda extends Controller{
	function __construct() {
		parent::__construct();
		$this->view->mensaje = "Bienvenido a la seccion ayuda¡¡";
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		
		$this->view->cargar('ayuda/index');
	}
}






?>