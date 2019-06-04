<?php 


//CONTROLADOR PARA EL PERFIL DEL USUARIO O ADMINISTRADOR
class Perfil extends Controller{
	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('perfil/index');
	}

	//METODO PARA MOSTRAR TODOS LOS DETALLES DEL USUARIO
	/*EN CASO DE QUERER VER LOS METODOS QUE HACEN EL CRUD DEL USUARIO EN LA PAGINA PERFIL,
	ESTAN TODOS EN EL MODELO USUARIOMODEL*/
	function mostrarDetallesUsuario() {
		$usuario = $_GET['usuario'];
		$this->model->showDetail($usuario);
	}
}











?>