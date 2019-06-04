<?php 


//ESTA CLASE ADMIN FUNCIONA COMO CONTROLADOR
class Admin extends Controller{
	public function __construct() {
		parent::__construct();
		
	}

	//PARA CARGAR LA VISTA CORRESPONDIENTE
	public function cargarVista() {
		//SI LA SESSION ESTA INICIADA CUYA ROL ES ADMINISTRADOR, PERMITIR ACCESO A LA PAGINA DE ADMINISTRACION
		//EN CASO CONTRARIO, REDIRIGIAR A LA PAGINA DE ERROR
		if (isset($_SESSION['usuario'])) {
			if ($_SESSION['rol'] == "administrador") {
				$this->view->cargar('admin/index');
			} else {
				$this->view->cargar('errores/index');
			}
			
		}else {
			$this->view->cargar('errores/index');
		}
		
	}

	/*LOS SIGUIENTES METODOS SON FUNCIONES CRUD PARA LOS USUARIOS*/
	public function mostrarUsuarios() {
		$this->model->show();
	}

	public function mostrarDetallesUsuario() {
		$usuarioX = $_GET['usuario'];
		$this->model->showDetail($usuarioX);
	}

	public function modificarUsuario() {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$fecha_nac = $_POST['fecha_nac'];
		$usuario = $_POST['usuario'];
		$user = $_POST['user'];
		$lista = ['nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'telefono' => $telefono, 'fecha_nac' => $fecha_nac, 'usuario' => $usuario, 'user' => $user];
		$this->model->changeUser($lista);
	}

	public function darBaja() {
		$usuario = $_POST['usuario'];
		$this->model->deleteUser($usuario);
	}
}


?>