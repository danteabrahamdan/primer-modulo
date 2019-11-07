<?php
	if (isset($_GET['REGISTRA_S']))
	{
		header("location: S/FORM_REGISTRA_S.PHP");
	}
	if (isset($_GET['REGISTRA_P']))
	{
		header("location: P/form_Registra_P.PHP");
	}
	if (isset($_GET['REGISTRA_I']))
	{
		header("location: I/form_Registra_I.PHP");
	}
	if (isset($_GET['REGISTRA_CP']))
	{
		header("location: CP/FORM_REGISTRA_CPersona.PHP");
	}
	if (isset($_GET['MUESTRA_S']))
	{
		header("location: S/MOSTRAR_S.PHP");
	}
	if (isset($_GET['MUESTRA_P']))
	{
		header("location: P/MOSTRAR_P.PHP");
	}
	if (isset($_GET['MUESTRA_I']))
	{
		header("location: I/MOSTRAR_I.PHP");
	}
	if (isset($_GET['MUESTRA_CP']))
	{
		header("location: CP/MOSTRAR_CP.PHP");
	}
	if (isset($_GET['REGISTRA_CE']))
	{
		header("location: CE/FORM_REGISTRA_CEmpresa.PHP");
	}
	if (isset($_GET['MUESTRA_CE']))
	{
		header("location: CE/MOSTRAR_CE.PHP");
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--<link rel="stylesheet" type="text/css" href="estiloINDEX.css">-->
	<!-- declaration global styles -->
	<link rel="stylesheet" href="./assets/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="./assets/css/style-general.css">
	<link rel="stylesheet" href="./assets/css/style-index.css">
	<title>Sistema</title>
</head>
<body>

	<div class="container p-0">
		<div class="content new-content">

			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Registro')" id="defaultOpen">REGISTROS</button>
				<button class="tablinks" onclick="openCity(event, 'Listado')">LISTADOS</button>
			</div>

			<div class="tab-content mt-4" id="nav-tabContent">
				<div id="Registro" class="tabcontent .container-scroll-vertical">
	 				<form method="get" class="form-cards">
						<div class="card-list-click">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">INSIGNIA</span>
									<span class="card-part-one-subtitle">Registrar accion.</span>
								</div>
								<div class="sub-card-submit">
									<input type="submit" name="REGISTRA_I" value="" class="card-btn-arrow" ref="click_1">
								</div>
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/01.png" alt="Logo 1" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">PAÑOLETA</span>
									<span class="card-part-one-subtitle">Registrar accion.</span>
								</div>
								<input type="submit" name="REGISTRA_P" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/001.svg" alt="Logo 2" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">SUJETADOR</span>
									<span class="card-part-one-subtitle">Registrar accion.</span>
								</div>
								<input type="submit" name="REGISTRA_S" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/007.svg" alt="Logo 3" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">PERSONA</span>
									<span class="card-part-one-subtitle">Registrar accion.</span>
								</div>
								<input type="submit" name="REGISTRA_CP" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/002.svg" alt="Logo 4" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">EMPRESA</span>
									<span class="card-part-one-subtitle">Registrar accion.</span>
								</div>
								<input type="submit" name="REGISTRA_CE" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/003.svg" alt="Logo 5" class="img-card-small">
							</div>
						</div>
					</form>
				</div>
				 <!-- ******************************************************************************* -->
				 <!--                                     segundo tab                                 -->
				 <!-- ******************************************************************************* -->
				<div id="Listado" class="tabcontent">
					<form method="get" class="form-cards fc-2">
						<div class="card-list-click" style="background-color: rgba(66, 227, 166, 0.4) !important;">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">INSIGNIA</span>
									<span class="card-part-one-subtitle">Listar registros.</span>
								</div>
								<input type="submit" name="MUESTRA_I" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/03.png" alt="Logo 6" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click" style="background-color: rgba(255, 101, 1, 0.3) !important;">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">PAÑOLETA</span>
									<span class="card-part-one-subtitle">Listar registros.</span>
								</div>
								<input type="submit" name="MUESTRA_P" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/009.svg" alt="Logo 7" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click" style="background-color: rgba(86, 232, 255, 0.5) !important;">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">SUJETADOR</span>
									<span class="card-part-one-subtitle">Listar registros.</span>
								</div>
								<input type="submit" name="MUESTRA_S" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/005.svg" alt="Logo 8" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click" style="background-color: rgba(255, 118, 117, 0.5) !important;">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">PERSONA</span>
									<span class="card-part-one-subtitle">Listar registros.</span>
								</div>
								<input type="submit" name="MUESTRA_CP" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/008.svg" alt="Logo 9" class="img-card-small">
							</div>
						</div>

						<div class="card-list-click" style="background-color: rgba(255, 192, 1, 0.3) !important;">
	 						<div class="card-part-one">
	 							<div class="sub-card-content">
								 	<span class="card-part-one-title">EMPRESA</span>
									<span class="card-part-one-subtitle">Listar registros.</span>
								</div>
								<input type="submit" name="MUESTRA_CE" value="" class="card-btn-arrow">
							</div>
							<div class="card-part-two">
	 							<img src="./assets/img/004.svg" alt="Logo 9" class="img-card-small">
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

		<div class="sidebar">
			<div class="header-sidebar">
				<div class="logo">
					<a href="" class="prevent">
						<div class="letter">A</div>
						<div class="letter">d</div>
						<div class="letter">m</div>
						<div class="letter">i</div>
						<div class="letter">n</div>
						<div class="letter">i</div>
						<div class="letter">s</div>
						<div class="letter">t</div>
						<div class="letter">r</div>
						<div class="letter">a</div>
						<div class="letter">d</div>
						<div class="letter">o</div>
						<div class="letter">r</div>
					</a>
				</div>
				<span>Acciones y opciones</span>
			</div>
			<div class="footer-sidebar">
				<span>Registro<a id="register-link" class="click-a"> y Vista</a></span>
			</div>
		</div>
	</div>

	<!-- declaration scripts -->
	<script src="./assets/js/anime.min.js"></script>
	<script src="./assets/js/animation-index.js"></script>
	<script src="./assets/js/perfect-scrollbar.js"></script>
	<script src="./assets/js/animation-tab.js"></script>
</body>
</html>