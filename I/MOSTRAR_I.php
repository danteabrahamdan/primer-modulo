<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/css/style-client.css">
	<link rel="stylesheet" href="../assets/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/style-show-grid.css">
	<link rel="stylesheet" href="../assets/css/tooltip.css">
	<link rel="stylesheet" href="../assets/css/style-btn.css">
	<title>Lista insignias</title>
</head>
<body>
	
	<form method="POST" action="GUARDAR_I.php">
		<div class="container column-wrapper">
			<div class="content new-content">
				<span>LISTADO TOTAL</span>
				<?php
					require "conectar3.php";
					$consulta = "SELECT * FROM insignia";
					$resultado = mysqli_query($conex,$consulta);

					echo "
					<div class='container-cards'>
						<div class='container-scroll-vertical'>		
					";

					while ($res = mysqli_fetch_array($resultado)) 
					{	
						$a = $res['IMAGEN'];
						$nom=     $res['NOMBRE'];
						$catx=     $res['CATEGORIA'];
						echo "
							<div class='content-logo'>
								<div class='part-img'>
									<img src='$a' alt='logo' class='img-logo'>
								</div>
								<div class='part-info'>
									<p class='part-info-name'>$nom</p>
									<p class='part-info-category'>$catx</p>
								</div>		
							</div>						
						";
					}

					echo "
						</div>
					</div>
					";
				?>
				<a href="./form_Registra_I" class="btn-add"><img src="../assets/icons/add.svg" alt="add" class="btn-add-svg"></a>
			</div>

			<div class="sidebar">
				<div class="header-sidebar">
					<div class="logo">
						<a href="" class="prevent">
							<div class="letter">I</div>
							<div class="letter">N</div>
							<div class="letter">S</div>
							<div class="letter">I</div>
							<div class="letter">G</div>
							<div class="letter">N</div>
							<div class="letter">I</div>
							<div class="letter">A</div>
							<div class="letter">S</div>
						</a>
					</div>
					<span>Listado completo</span>
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
