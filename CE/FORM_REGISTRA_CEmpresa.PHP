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
	<title>Nueva Empresa cliente</title>
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
      $mensaje = "<div id='snackbar'>Error al registrar item</div>";
    }
    if (isset($_GET['m3']))
    {
      $mensaje ="<div id='snackbar'>Registro exitoso</div>";
    }
  ?>

	<form enctype="multipart/form-data" method="post" action="GUARDAR_CEmpresa.php">
		<div class="container column-wrapper">
			<div class="content new-content">
				<span>REGISTRAR EMPRESA CLIENTE</span>
				<label for="nit">Numero de Identificación tributaria</label>
				<input type="text" name="nit" id="nit" placeholder="NIT">
				<label for="nombre_e">Razon social</label>
				<input type="text" name="nombre_e" id="nombre_e" placeholder="Nombre">
				<label for="correo">Correo electronico</label>
        <input type="text" name="correo" id="correo" placeholder="Email">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono">
        <label for="direccion">Dirección</label>
				<input type="text" name="direccion" id="direccion" placeholder="Ciudad, Zona, Av. o Calle, Nro.">
				<span class="content-info">Completa los todos los campos para proceder con el registro</span>
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
