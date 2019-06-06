<?php 



class Log extends Controller{
	function __construct() {
		parent::__construct();
		
	}

	function cargarVista() {
		$this->view->cargar('log/index');
	}


	function listaLog() {
		$this->model->listaLog();
	}
}






?>