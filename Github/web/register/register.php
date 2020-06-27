<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>OTTOMATIC</title>
	<link rel="icon" type="image/png" href="../favicon.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<a id = "home"></a>
    <nav class="topnav">
      <a href="..\ottomatic.html"><i class="fa fa-fw fa-home"></i>INICIO</a>
      <a href="..\contacto.html"><i class="fa fa-envelope-o fa-fw"></i>CONTACTO</a>
      <a href=".\register.php" class = "frightactive"><i class="fa fa-user"></i> NUEVO USUARIO</a>
      <a href="..\login\login.php" class = "fright"><i class="fa fa-user"></i> INICIAR SESION</a>
    </nav>  
    <h1 class="subtitle">Ingrese Sus Datos</h1> 
	<div id="frm">
		<form action="process_r.php" method="POST">
			<p>
				<label>Ingrese su nombre de usuario</label>
				<input type="text" id="user" name="user" class="inp" />
			</p>
			<p>
				<label>Escriba su contraseña</label>
				<input type="password" id="pass" name="pass" class="inp" />
			</p>
			<p>
				<label>Repita su contraseña</label>
				<input type="password" id="pass2" name="pass2" class="inp" />
			</p>			
			<p>
				<input type="submit" id="btn" value="ENTRAR"/>
			</p>
		</form>
	</div>
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
