<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$ci=$_POST['ci'];
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$paterno = filter_var(strtolower($_POST['paterno']), FILTER_SANITIZE_STRING);
	$materno = filter_var(strtolower($_POST['materno']), FILTER_SANITIZE_STRING);
	$residencia = $_POST['residencia'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$errores = '';

	if (empty($usuario) or empty($password) or empty($password2) or empty($ci) or empty($nombre) ) {
		$errores .= '<li>Por favor rellena todos los datos</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
		} catch (PDOExeption $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();




		
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
		//HASS DE LA CONTRASEñA (encriptar)
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass, ci, nombre, paterno, materno, residencia) VALUES (null, :usuario, :pass, :ci, :nombre, :paterno, :materno, :residencia)');
		$statement->execute(array(':usuario' => $usuario, ':pass' => $password, ':ci'=>$ci, ':nombre'=>$nombre, ':paterno'=>$paterno, ':materno'=>$materno,':residencia'=>$residencia));

		header('Location: login.php');
	}
}
require 'views/registrate.view.php';
?>