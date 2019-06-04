<?php 

//CONTROLADOR MAIN QUE ES LA PAGINA PRINCIPAL DE NUESTRA PAGINA WEB
//SU UNICA FUNCIONALIDAD ES CARGAR LA VISTA DE MAIN
class Main extends Controller{

	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->mensaje = "Bienvenido al sitio";
		$this->view->cargar('main/index');
	}



	

}









?>