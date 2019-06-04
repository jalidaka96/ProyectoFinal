<?php 

//ESTA CLASE SIRVE PARA REDIRIGIR A UNA PAGINA DE ERROR EN CASO DE QUE EXISTA CUALQUIER ERROR EN LA PAGINA
//NO SE REQUIERE DE MODELO PORQUE LA UNICA FUNCIONALIDAD ES CARGAR LA VISTA DE ERRORES
class Errores extends Controller{

	function __construct() {
		parent::__construct();

		$this->view->mensaje = "Error al cargar el recurso";
		//PARA CARGAR LA VISTA CORRESPONDIENTE
		$this->view->cargar('errores/index');
	}

	

}



?>