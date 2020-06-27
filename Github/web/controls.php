<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['username'];

	if ($varsesion == 'admin') {
		
	} else {
		echo 'Usted no tiene autorización';
		die();
	}
	if (isset($_POST['li_on']))
    {
    	exec('python /var/www/html/controls/livingroom/livingroom_on.py');
    } elseif (isset($_POST['li_off'])) {
    	exec('python /var/www/html/controls/livingroom/livingroom_off.py');	
    } elseif (isset($_POST['k_on'])) {
    	exec('python /var/www/html/controls/kitchen/kitchen_on.py');	
    } elseif (isset($_POST['k_off'])) {
    	exec('python /var/www/html/controls/kitchen/kitchen_off.py');	
    } elseif (isset($_POST['ba_on'])) {
    	exec('python /var/www/html/controls/bathroom/bathroom_on.py');	
    } elseif (isset($_POST['ba_off'])) {
    	exec('python /var/www/html/controls/bathroom/bathroom_off.py');	
    } elseif (isset($_POST['be_on'])) {
    	exec('python /var/www/html/controls/bedroom/bedroom_on.py');	
    } elseif (isset($_POST['be_off'])) {
    	exec('python /var/www/html/controls/bedroom/bedroom_off.py');	
    } elseif (isset($_POST['lo_on'])) {
    	exec('python /var/www/html/controls/loft/loft_on.py');	
    } elseif (isset($_POST['lo_off'])) {
    	exec('python /var/www/html/controls/loft/loft_off.py');	
    } elseif (isset($_POST['d_on'])) {
    	exec('python /var/www/html/controls/door/door_open.py');	
    } elseif (isset($_POST['d_off'])) {
    	exec('python /var/www/html/controls/door/door_close.py');	
    } elseif (isset($_POST['h_on'])) {
    	exec('python /var/www/html/controls/bedroom/bedroom_on.py');	
    } elseif (isset($_POST['h_off'])) {
    	exec('python /var/www/html/controls/bedroom/bedroom_off.py');	
    } elseif (isset($_POST['a_on'])) {
    	exec('python /var/www/html/controls/loft/loft_on.py');	
    } elseif (isset($_POST['a_off'])) {
    	exec('python /var/www/html/controls/loft/loft_off.py');	
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
		<a href=".\controls.php" class="active"><i class="fa fa-fw fa-cogs"></i>CONTROLES</a>
		<a href=".\informacion.php"><i class="fa fa-fw fa-info-circle"></i>INFORMACION</a>
		<a href=".\cerrar_session.php" class = "fright"><i class="fa fa-user"></i> CERRAR SESION</a>

	</nav>
<!-- -------------------------------------------------------------------------------------------------- -->

	<div class="container">
		<h2 class="subtitle">Bienvenido de nuevo Administrador</h2>
		<h2 class="subtitle">Bienvenido <?php echo $_SESSION['username'] ?></h2>
		<h2 class="subtitle">CONFIGURACION</h2>
		<div class="settings">
			<form method="post">
				<div>
					<label for="puertaprincipal">PUERTA PRINCIPAL</label>
					<td><input type="submit" value="OPEN" name="d_on" class="boton"></td>
					<td><input type="submit" value="CLOSE" name="d_off" class="boton"></td>
				</div>
				<div>
					<label for="luzsalon">LUZ SALON</label>
					<td><input type="submit" value="ON" name="li_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="li_off" class="boton"></td>
				</div>
				<div>
					<label for="luzcocina">LUZ COCINA</label>
					<td><input type="submit" value="ON" name="k_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="k_off" class="boton"></td>
				</div>
				<div>
					<label for="luzbaño">LUZ BAÑO</label>
					<td><input type="submit" value="ON" name="ba_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="ba_off" class="boton"></td>
				</div>
				<div>
					<label for="luzdormitorio">LUZ DORMITORIO</label>
					<td><input type="submit" value="ON" name="be_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="be_off" class="boton"></td>
				</div>
				<div>
					<label for="luzdesvan">LUZ DESVAN</label>
					<td><input type="submit" value="ON" name="lo_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="lo_off" class="boton"></td>
				</div>
				<div class="setting">
					<label for="calefaccion">CALEFACCION</label>
					<td><input type="submit" value="ON" name="l_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="l_off" class="boton"></td>
				</div>
				<div>
					<label for="ventilador">VENTILADOR</label>
					<td><input type="submit" value="ON" name="l_on" class="boton"></td>
					<td><input type="submit" value="OFF" name="l_off" class="boton"></td>
				</div>
			</form>
		</div>
	</div>

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
