<?php 




//MODELO PARA EL LOGIN 
class loginModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}


	//IMPLEMENTACION DEL METODO LOGIN PARA PODER ACCEDER SIN PROBLEMAS COMO USUARIO, Y ADEMAS CREANDO LAS VARIABLES SESIONES NECESARIAS
	public function login($usuario, $password) {
		
		//sleep(1.5);
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
		$result = mysqli_query($this->conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($usuario === $row['usuario'] && password_verify($password, $row['password'])) {
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['rol'] = $row['rol'];
			echo "Iniciado";
		} else {
			echo "Error en la autentificacion";
		}

		mysqli_close($this->conn);
	}
}












?>