</body>
</html>    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/css/style-general.css">
  <link rel="stylesheet" href="../assets/css/style-register-insignia.css">
  <link rel="stylesheet" href="../assets/css/style-new-company-client.css">
	<link rel="stylesheet" href="../assets/css/tooltip.css">
	<title>Nueva cliente</title>
</head>
<body>

  <?php 
    $mensaje="";
    if (!isset($_GET['m1']) and !isset($_GET['m1']) and !isset($_GET['m3']) )
    {
      $mensaje = "REALICE UN REGISTRO";
    }
    if (isset($_GET['m1']))
    {
      $mensaje = "<div id='snackbar'>Completa todos los campos</div>";
    }
    if (isset($_GET['m2']))
    {
      $mensaje = "<div id='snackbar'>Error al registrar cliente</div>";
    }
    if (isset($_GET['m3']))
    {
      $mensaje ="<div id='snackbar'>Registro exitoso</div>";
    }
  ?>

	<form enctype="multipart/form-data" method="post" action="GUARDAR_CPersona.php">
		<div class="container column-wrapper">
			<div class="content new-content">
				<span>NUEVO CLIENTE</span>
				<label for="carnet">Cedula de identidad</label>
				<input type="text" name="carnet" id="carnet" placeholder="10000000">
				<label for="nombre">Nombre(s)</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombres">
        <label for="apellido">Apellidos</label>
        <input type="text" name="apellido" id="apellido" placeholder="Apellidos">
        <label for="correo">Correo electronico</label>
        <input type="text" name="correo" id="correo" placeholder="nombre@dominio.com">
        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular" placeholder="77777777">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ciudad, zona, av. o calle, nro.">
        <span class="content-info"></span>
				<input type="submit" name="register" value="AÑADIR A BBDD">
				<input type="submit" name="nuevoI" value="NUEVO REGISTRO">
			</div>

			<div class="sidebar">
				<div class="header-sidebar">
					<div class="logo">
						<a href="" class="prevent">
							<div class="letter">R</div>
							<div class="letter">e</div>
							<div class="letter">g</div>
							<div class="letter">i</div>
							<div class="letter">s</div>
							<div class="letter">t</div>
							<div class="letter">r</div>
							<div class="letter">o</div>
						</a>
					</div>
					<span>ingresa los datos</span>
				</div>
				<div class="footer-sidebar container-icon">
					<span>ir a <a id="register-link" class="click-a" href="/primermodulo">Inicio</a></span>
					<p class="span">Menu principal</p>
				</div>
			</div>
		</div>
	</form>

	<script src="../assets/js/anime.min.js"></script>
	<script src="../assets/js/animation-reg.js"></script>

</body>
</html>    
