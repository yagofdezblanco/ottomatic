<?php
	//cogemos los valores del login
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$password2 = $_POST['pass2'];


	//conectamos a la base de datos
	$enlace = mysqli_connect("localhost","pi","Toor.1234","login");

	//consulta y comprobacion de usuarios
	$username = mysqli_real_escape_string($enlace,$username);
	$password = mysqli_real_escape_string($enlace,$password);
	$password2 = mysqli_real_escape_string($enlace,$password2);
	$result = mysqli_query($enlace,"select * from users where username = '$username'")
		or die("No se pudo consultar la base de datos".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username) {
		echo "NOMBRE DE USUARIO YA EXISTENTE";
	} else {
		if ($password != $password2) {
			echo "LAS CONTRASEÑAS NO COINCIDEN";
		} else {
			mysqli_query($enlace,"insert into users (id_user,username,password) values (NULL,'$username','$password')");
			echo "USUARIO CREADO CORRECTAMENTE";
			header("Location:..\login\login.php");
		}
	}
	//cerramos la conexion
	mysqli_close($enlace);

?>