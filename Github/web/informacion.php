<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['username'];

	if ($varsesion == null || $varsesion = '') {
		echo 'Usted no tiene autorización';
		die();
	}
?>


<!Doctype html>
<html lang = "es">
<head>
	<meta charset="UTF-8">
	<title>OTTOMATIC</title>
	<link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
	<link rel="stylesheet" href="css/miestilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<a id = "home"></a>
	<nav class="topnav">
		<a href=".\informacion.php" class="active"><i class="fa fa-fw fa-info-circle"></i>INFORMACION</a>
		<?php if ($_SESSION['username']  == "admin") { ?>
			<a href=".\controls.php"><i class="fa fa-fw fa-cogs"></i>CONTROLES</a>
		<?php } ?>
		<a href=".\cerrar_session.php" class = "fright"><i class="fa fa-user"></i> CERRAR SESION</a>

	</nav>
<!-- -------------------------------------------------------------------------------------------------- -->
	<h2 class="subtitle">INFORMACION</h2>
<h2 class="subtitle">Bienvenido <?php echo $_SESSION['username'] ?></h2>
<!-- -------------------------------------------------------------------------------------------------- -->
	<br>	
	<hr>
	<footer>
		<a id="contactmail"></a>
		<p>
			<i class="fa fa-code"></i> Web made by Yago Fernández.
		</p>
		<p>
			<i class="fa fa-envelope-o fa-fw"></i> Contact us: 
			<a class="ref" href="mailto:ottomatic.domotics@gmail.com" target="_top">mail</a>.
		</p>
		<p>
			<a class="ref" href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
		</p>
		<br>
	</footer>
</body>
</html>