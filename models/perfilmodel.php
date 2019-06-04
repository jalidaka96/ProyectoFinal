<?php 

//INCLUIMOS EL FICHERO USUARIO MODEL PARA PODER HACER USO DE LOS METODOS CRUD
require_once 'usuariomodel.php';

//MODELO PERFIL 
class perfilModel extends Model {

	public function __construct() {
		parent::__construct();
	}

	//METODO PARA MOSTRAR LOS DETALLES DEL USUARIO EN EL PERFIL
	public function showDetail($x) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "SELECT * FROM usuarios WHERE usuario = '$x'";
		$result = mysqli_query($this->conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			echo json_encode($row);
		}
		

		

		mysqli_close($this->conn);
	}

	

	
}




















?>