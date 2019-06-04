<?php 


//CLASE CON METODOS PARA USAR LA BASE DE DATOS
class Database {
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;
	
	public function __construct() {
		$this->host = constant('HOST');
		$this->db = constant('DB');
		$this->user = constant('USER');
		$this->password = constant('PASSWORD');
		$this->charset = constant('CHARSET');
	}


	//CONEXION A LA BASE DE DATOS
	function conn() {
		
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
		return $this->conn;
	}

	//CONEXION A LA BASE DE DATOS PAR USARLO EN UN DETERMINADO SITIO
	function connect() {
		$this->conn();

		if (!$this->conn) {
			die("Conexion a la base de datos fallida" . mysqli_connect_error());
		}
		mysqli_close($this->conn);
	}

	//CREACION DE LA BASE DE DATOS
	function createDB($dbname, $conn) {
		$sql = "DROP DATABASE IF EXISTS " . $dbname;
		if (mysqli_query($conn, $sql)) {
			echo "Base de datos eliminada correctamente. <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}
		

		$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname . " CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
		if (mysqli_query($conn, $sql)) {
			echo "Base de datos creada satisfactoriamente. <br>";
		} else {
			echo "Error: " .$sql . "<br>" . mysqli_error($conn);
		}

		
	}


	//SELECCIONAR LA BASE DE DATOS INDICADA
	function selectDB($dbname, $conn) {
		mysqli_select_db($conn, $dbname);
	}
}



?>