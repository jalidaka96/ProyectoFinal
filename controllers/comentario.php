<?php 


//CLASE CONTROLADOR PARA LOS COMENTARIOS
class Comentario extends Controller{
	function __construct() {
		parent::__construct();
		
	}

	/*function cargarVista() {
		$this->view->cargar('aboutUs/index');
	}*/

	/*METODOS PARA INSERTAR Y MOSTRAR COMENTARIOS*/

	function insertarComentario() {
		$id_producto = $_GET['id_producto'];
		$comentario = $_GET['comentario'];
		$usuario = $_SESSION['usuario'];

		$this->model->insertComment($id_producto, $comentario, $usuario);

	}

	function mostrarComentarios() {
		$id_producto = $_GET['id_producto'];

		$this->model->showComments($id_producto);
	}
}






?>