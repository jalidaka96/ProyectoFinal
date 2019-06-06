<?php


//CLASE CONTROLADOR PARA EL REGISTRO DE UN USUARIO
class Registro extends Controller {

	function __construct() {
		parent::__construct();
		
	}
	//PARA CARGAR LA VISTA CORRESPONDIENTE
	function cargarVista() {
		$this->view->cargar('registro/index');
	}

	//METODO QUE OBTIENE LOS DATOS INGRESADOS POR EL USUARIO PARA MANDARLOS AL MODELO
	function registrarAlumno() {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$fecha_nac = $_POST['fecha_nac'];
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$captcha = $_POST['captcha'];
		$lista = ['nombre' => $nombre, 'apellido' => $apellido, 'correo' => $correo, 'telefono' => $telefono, 'fecha_nac' => $fecha_nac, 'usuario' => $usuario, 'password' => $password, 'captcha' => $captcha];
		

		$this->model->insert($lista);

	}
}







?>