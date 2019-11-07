<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/css/style-client.css">
	<link rel="stylesheet" href="../assets/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/tooltip.css">
	<link rel="stylesheet" href="../assets/css/style-btn.css">
	<title>Lista clientes</title>
</head>
<body>
	
	<form method="POST" action="GUARDAR_CPersona.php">
		<div class="container column-wrapper">
			<div class="content new-content">
				<span>LISTADO TOTAL</span>
				<?php
					require "conectar3.php";
					$consulta = "SELECT * FROM cp";
					$resultado = mysqli_query($conex,$consulta);

					echo "
					<div class='container-clients'>
						<div class='container-scroll-vertical'>		
					";

					while ($res = mysqli_fetch_array($resultado)) 
					{	
						$idx = $res['id_cp'];
						$cix = $res['carnet'];
						$apx = $res['apellido'];
						$nomx = $res['nombre'];
						$corx = $res['correo'];
						$celx = $res['celular'];
						$dirx = $res['direccion'];
						echo "
							<div class='content-client'>
								<span class='client-name'>$nomx $apx</span>
								<div class='others-data-client'>
									<div class='client-data'>
										<img src='../assets/icons/key.svg' alt='logo 1' class='client-info-1'>
										<span class='client-info-2'>Id: </span>
										<span class='client-info-3'>&nbsp; $idx</span>
									</div>

									<div class='client-data'>
										<img src='../assets/icons/nit-ci.svg' alt='logo 1' class='client-info-1'>
										<span class='client-info-2'>CI: </span>
										<span class='client-info-3'>&nbsp; $cix</span>
									</div>

									<div class='client-data'>
										<img src='../assets/icons/email.svg' alt='logo 1' class='client-info-1'>
										<span class='client-info-2'>Email: </span>
										<span class='client-info-3'>&nbsp; $corx</span>
									</div>

									<div class='client-data'>
										<img src='../assets/icons/phone.svg' alt='logo 1' class='client-info-1'>
										<span class='client-info-2'>Celular: </span>
										<span class='client-info-3'>&nbsp; $celx</span>
									</div>

									<div class='client-data'>
										<img src='../assets/icons/location.svg' alt='logo 1' class='client-info-1'>
										<span class='client-info-2'>Direccion: </span>
										<span class='client-info-3'>&nbsp; $dirx</span>
									</div>
								</div>
							</div>						
						";
					}
					echo "
						</div>
					</div>
					";

				?>
				<a href="./FORM_REGISTRA_CPersona" class="btn-add">
					<img src="../assets/icons/add.svg" alt="add" class="btn-add-svg">
				</a>

			</div>

			<div class="sidebar">
				<div class="header-sidebar">
					<div class="logo">
						<a href="" class="prevent">
							<div class="letter">C</div>
							<div class="letter">L</div>
							<div class="letter">I</div>
							<div class="letter">E</div>
							<div class="letter">N</div>
							<div class="letter">T</div>
							<div class="letter">E</div>
							<div class="letter">S</div>
						</a>
					</div>
					<span>Order Nombre completo</span>
				</div>
				<div class="footer-sidebar container-icon">
					<span>ir a <a id="register-link" class="click-a" href="/primermodulo">Inicio</a></span>
					<p class="span">Menu principal</p>
				</div>
			</div>
		</div>
	</form>

	<script src="../assets/js/anime.min.js"></script>
	<script src="../assets/js/perfect-scrollbar.js"></script>
	<script src="../assets/js/animation-lists.js"></script>
	<script src="../assets/js/height.js"></script>
	<script>

		const ps = new PerfectScrollbar('.container-scroll-vertical', { wheelPropagation: true });
		ps.update();
		
	</script>

</body>
</html>    
