<?php 



class Carrito extends Controller{
	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		
		$this->view->cargar('carrito/index');
	}

	function insertarCarrito() {
		$id = $_GET['id_producto'];
		$precio = $_GET['precio'];
		$this->model->insertarCarrito($id, $precio);
	}

	function mostrarCarrito() {
		$this->model->mostrarCarrito();
	}

	function eliminarCarrito() {
		$id_producto = $_GET['id_producto'];
		$usuario = $_SESSION['usuario'];
		$this->model->eliminarCarrito($id_producto, $usuario);
	}

	function eliminarTodo() {
		$this->model->eliminarTodo();
	}


	function contarCarrito() {
		$this->model->contarCarrito();
	}

}






?>