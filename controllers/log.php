<?php 



class Log extends Controller{
	function __construct() {
		parent::__construct();
		
	}

	function cargarVista() {
		
		//SI LA SESSION ESTA INICIADA CUYA ROL ES ADMINISTRADOR, PERMITIR ACCESO A LA PAGINA DE ADMINISTRACION
		//EN CASO CONTRARIO, REDIRIGIAR A LA PAGINA DE ERROR
		if (isset($_SESSION['usuario'])) {
			if ($_SESSION['rol'] == "administrador") {
				$this->view->cargar('log/index');
			} else {
				$this->view->cargar('errores/index');
			}
			
		}else {
			$this->view->cargar('errores/index');
		}
	}


	function listaLog() {
		$this->model->listaLog();
	}
}






?>