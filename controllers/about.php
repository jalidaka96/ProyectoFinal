<?php 



class About extends Controller{
	function __construct() {
		parent::__construct();
		$this->view->mensaje = "ABOUT US";
		
	}

	function cargarVista() {
		$this->view->cargar('aboutUs/index');
	}
}






?>