<?php 


//CONTROLADOR LOGIN PARA PODER ACCEDER COMO USUARIO O ADMINISTRADOR
class Login extends Controller{
	function __construct() {
		parent::__construct();
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('login/index');
	}

	/*ESTOS METODOS SIRVEN PARA PODER ACCEDER O CERRAR SESION DEL USUARIO*/
	function login() {
		sleep(1);
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		$this->model->login($usuario, $password);
	}

	function cerrarSession() {
		session_start();
		session_destroy();
		header('Location: /proyecto/');
	}
	
}






?>