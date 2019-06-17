<?php 

//CLASE CON METODOS IMPLEMENTADOS PARA CRUD

class Usuario {

	public $nombre;
	public $apellido;
	public $email;
	public $telefono;
	public $fecha_nac;
	protected $usuario;
	private $password;


	public function obtener_datos($conn) {
		
		$query = "SELECT usuario, nombre, apellido, email, telefono, fecha_nac, password, fecha_creacion_usuario
			FROM usuarios WHERE rol='usuario'";
		$lista = [];
		$result = mysqli_query($conn, $query);
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

	public function obtener_datos_por_usuario($usuario='', $conn) {
		if ($usuario!='') {
			$query = "SELECT usuario, nombre, apellido, email, telefono, fecha_nac, password, fecha_creacion_usuario
			FROM usuarios 
			WHERE usuario = '$usuario'";
			$result = mysqli_query($conn, $query);

			
			if ($result) {
				if (mysqli_num_rows($result) > 0) {

					$row = mysqli_fetch_assoc($result);
					
					echo json_encode($row);

					return $row;
				} 
			}
			
		}
		
		
			
	}

	public function insertar_datos($lista, $conn) {
		$nombre = $lista['nombre'];
		$apellido = $lista['apellido'];
		$correo = $lista['correo'];
		$telefono = $lista['telefono'];
		$fecha_nac = $lista['fecha_nac'];
		$usuario = $lista['usuario'];
		$password = $lista['password'];
		$captcha = $lista['captcha'];

		function sanitize($str) {
			$str=str_replace("&","&amp;",$str);
			$str=str_replace("\"","&quot;",$str);
			$str=str_replace("'","&apos;",$str);
			$str=str_replace(">","&gt;",$str);
			$str=str_replace("<","&lt;",$str);
			$str=str_replace("€","&lt;",$str);
			return $str;
		}

		$nombreS = sanitize($nombre);
		$apellidoS = sanitize($apellido);
		$correoS = sanitize($correo);
		$telefonoS = sanitize($telefono);
		$fecha_nacS = sanitize($fecha_nac);
		$usuarioS = sanitize($usuario);
		$passwordS = sanitize($password);
		$captchaS = sanitize($captcha);

		if ($captcha == $_SESSION['custom_captcha']) {
			$pass_hash = password_hash($passwordS, PASSWORD_DEFAULT);

		
			ob_start();
			$row = $this->obtener_datos_por_usuario($lista['usuario'], $conn);
			ob_end_clean();
			if ($row) {
				
				echo "EL usuario ya existe";
			} else {
				$sql = "INSERT INTO usuarios (usuario, nombre, apellido, email, telefono, fecha_nac, password, rol) VALUES ('$usuarioS', '$nombreS', '$apellidoS', '$correoS', $telefonoS, '$fecha_nacS', '$pass_hash', 'usuario')";

				if (mysqli_query($conn, $sql)) {
				    echo "OK";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
			}
		} else {
			echo "El captcha introducido no es correcto";
		}

		

		
		
	}

	public function editar($lista, $conn) {
		$nombre = $lista['nombre'];
		$apellido = $lista['apellido'];
		$email = $lista['email'];
		$telefono = $lista['telefono'];
		$fecha_nac = $lista['fecha_nac'];
		$usuario = $lista['usuario'];
		$user = $lista['user'];

		$sql = "UPDATE 		usuarios
				SET 		usuario = '$usuario',
							nombre = '$nombre',
							apellido = '$apellido',
							email = '$email',
							telefono = $telefono,
							fecha_nac = '$fecha_nac'
				WHERE 		usuario = '$user'";

		if (mysqli_query($conn, $sql)) {
			echo "OK";
			
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}


	public function eliminar($usuario, $conn) {
		$sql = "DELETE FROM usuarios WHERE usuario = '$usuario'";
		
		if (mysqli_query($conn, $sql)) {
			echo "OK";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}



}
















?>