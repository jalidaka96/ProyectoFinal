<?php 


//CONTROLADOR LOGIN PARA PODER ACCEDER COMO USUARIO O ADMINISTRADOR
class Login extends Controller{
	function __construct() {
		parent::__construct();
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$_SESSION['intentos'] = 0;
		$this->view->cargar('login/index');
	}

	/*ESTOS METODOS SIRVEN PARA PODER ACCEDER O CERRAR SESION DEL USUARIO*/
	function login() {
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$_SESSION['intentos']++;
		$intentos =  $_SESSION['intentos'];
		$this->model->login($usuario, $password, $intentos);
	}

	function cerrarSession() {
		session_destroy();
		header('Location: /proyecto/');
	}
	
}






?>