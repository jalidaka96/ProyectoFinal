<?php 






//UN CONTROLADOR QUE SU SIMPLE FUNCION ES REDIRIGIR A UNA PAGINA EN CASO DE QUE UN USUARIO SE HAYA REGISTRADO SATISFACTORIAMENTE
class ErrorRegistro extends Controller {

	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('registro/error');
	}

	
}



?>