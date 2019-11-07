<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/css/style-general.css">
	<link rel="stylesheet" href="../assets/css/style-register-insignia.css">
	<link rel="stylesheet" href="../assets/css/tooltip.css">
	<title>Nueva pañoleta</title>
</head>
<body>

  <?php 
    if (isset($_GET['error']))
    {
    echo "<div id='snackbar'>Completa todos los campos</div>";
    }
    if (isset($_GET['error2']))
    {
    echo "<div id='snackbar'>Error al registrar item</div>";
    }if (isset($_GET['exito']))
    {
    echo "<div id='snackbar'>Registro exitoso</div>";
    }
  ?>

	<form enctype="multipart/form-data" method="post" action="GUARDAR_P.php">
		<div class="container column-wrapper">
			<div class="content new-content">
				<span>REGISTRAR PAÑOLETA</span>
				<label for="categoria">Categoria</label>
				<input type="text" name="categoria" id="categoria" placeholder="Ingresa la categoria">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre">
				<label for="imagen">Seleccionar imagen</label>
				<input type="file" name="imagen" id="imagen">
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
