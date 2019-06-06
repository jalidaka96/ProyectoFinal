<?php 


require_once 'logmodel.php';

//MODELO PARA EL LOGIN 
class loginModel extends Model {

	public function __construct() {
		parent::__construct();
		$this->log = new logModel();
		
	}


	//IMPLEMENTACION DEL METODO LOGIN PARA PODER ACCEDER SIN PROBLEMAS COMO USUARIO, Y ADEMAS CREANDO LAS VARIABLES SESIONES NECESARIAS
	public function login($usuario, $password, $intentos) {
		
		//sleep(1.5);


		try {
			
			
			$this->db->connect();
			$this->conn = $this->db->conn();

			$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
			$result = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if ($usuario === $row['usuario'] && password_verify($password, $row['password'])) {
				$_SESSION['usuario'] = $row['usuario'];
				$_SESSION['rol'] = $row['rol'];
				echo "Iniciado";
			} else if (!password_verify($password, $row['password'])) {
				echo "Error en la autentificacion";
				 if($intentos > 3){
					throw new Exception("Intento de inicio de sesion superior a 3 intentos.");
				}
			} else {
				throw new Exception("Error al iniciar sesion con el usuario " . $usuario);
			}

			mysqli_close($this->conn);
			
		} catch (Exception $e) {
			

			$mensajeError = $e->getMessage();
			$ubicacion = 'loginmodel.php, linea 16';
			$this->log->insertarLog($mensajeError, $ubicacion, $usuario);
			


			
			
		}

		
	}
}












?>