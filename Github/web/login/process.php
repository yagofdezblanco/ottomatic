<?php

	//cogemos los valores del login
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//conectamos a la base de datos
	$enlace = mysqli_connect("localhost","pi","Toor.1234","login");

	//consulta y comprobacion de usuarios
	$username = mysqli_real_escape_string($enlace,$username);
	$password = mysqli_real_escape_string($enlace,$password);
	$result = mysqli_query($enlace,"select * from users where username = '$username' and password = '$password' ")
		or die("No se pudo consultar la base de datos".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password ) {
		session_start();
		$_SESSION['username'] = $username;
		$fichero = '/var/www/html/logs.txt';
		$dataToLog = array (date("Y-m-d H:i:s"),$username,$_SERVER['REMOTE_ADDR'],'LOGIN');
		$data = implode(" - ",$dataToLog);
		$data .= PHP_EOL;
		file_put_contents($fichero, $data, FILE_APPEND | LOCK_EX);
		if ($username == "admin") {

			header("Location:..\controls.php");
		} else {
			header("Location:..\informacion.php");
		}
	} else {
		echo "ERROR CON EL USUARIO";
	}
	//cerramos la conexion
	mysqli_close($enlace);

?>
