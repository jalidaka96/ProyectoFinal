<?php 


//MODELO DE LOG PARA PODER IMPLEMENTAR LOS METODOS NECESARIOS PARA EL SISTEMA LOG

class logModel extends Model {

	public function __construct() {
		parent::__construct();
		
	}


	//ESTA FUNCION SIRVE PARA MOSTRAR TODOS LOS ERRORES QUE HAY EN LA BASE DE DATOS O EN EL SISTEMA DE LOG
	public function listaLog() {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$query = "SELECT *
			FROM log";
		$lista = [];
		$result = mysqli_query($this->conn, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				array_push($lista, $row);
				//echo json_encode($row);
			}
			echo json_encode($lista);
			

		} else {
			echo "No entra";
		}
	}


	//ESTE METODO SE VA A ENCARGAR DE REGISTRAR TODOS LOS ERRORES 
	public function insertarLog($mensajeError, $ubicacion, $usuario) {
		$this->db->connect();
		$this->conn = $this->db->conn();

		$sql = "INSERT INTO log (detalle, ubicacion, usuario) VALUES ('$mensajeError', '$ubicacion', '$usuario')";


		mysqli_query($this->conn, $sql);
	}









}

?>