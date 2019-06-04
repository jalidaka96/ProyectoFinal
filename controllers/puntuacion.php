<?php 


//CLASE CONTROLADOR PARA LA PUNTUACION O SISTEMA DE VOTOS
class Puntuacion extends Controller{
	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		//$this->view->cargar('aboutUs/index');
	}


	/*ESTAS DOS FUNCIONES SON LAS QUE ENVIAN LA PUNTUACION O VALORACION REALIZADA POR EL USUARIO AL MODELO CORRESPONDIENTE*/
	function positiva() {
		$id_producto = $_GET['id_producto'];
		$usuario = $_SESSION['usuario'];
		$this->model->positiva($id_producto, $usuario);
	}

	function negativa() {
		$id_producto = $_GET['id_producto'];
		$usuario = $_SESSION['usuario'];
		$this->model->negativa($id_producto, $usuario);
	}


	/*ESTOS DOS METODOS SE ENCARGAN DE ANULAR LA VOTACION REALIZADA, LO CUAL EL MODELO HACE UNA QUERY PARA ELIMINAR DICHA FILA*/
	function cancelarPositiva() {
		$id_producto = $_GET['id_producto'];
		$usuario = $_SESSION['usuario'];
		$this->model->cancelarPositiva($id_producto, $usuario);
	}

	function cancelarNegativa() {
		$id_producto = $_GET['id_producto'];
		$usuario = $_SESSION['usuario'];
		$this->model->cancelarNegativa($id_producto, $usuario);
	}
}






?>