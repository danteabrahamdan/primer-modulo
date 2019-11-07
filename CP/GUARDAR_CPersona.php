
    	
 <?php 

if (isset($_POST['menu'])  )
{
			 	header("location: ..//index.php");
}

if (isset($_POST['nuevoI']) )
{
			 	header("location: FORM_REGISTRA_CPersona.php");
}


if (isset($_POST['register']))
 {

 	if (strlen($_POST['carnet'])>0 and
 		strlen($_POST['nombre'])>0 and
 		strlen($_POST['apellido'])>0 and
 		strlen($_POST['correo'])>0 and
 		strlen($_POST['celular'])>0 and
 		strlen($_POST['direccion'])>0 
	   )
  {
 		
 	
		include ("conectar3.php");
		$carnetx = $_POST['carnet'];
		$nombrex = $_POST['nombre'];
		$apelidox = $_POST['apellido'];
		$correox = $_POST['correo'];
		$celularx = $_POST['celular'];
		$direccionx = $_POST['direccion'];

		$consulta1 = "
		INSERT INTO cp(carnet,apellido,nombre,correo,celular,direccion) VALUES
		 ('$carnetx','$apelidox','$nombrex','$correox','$celularx','$direccionx')";
		$resultado1 = mysqli_query($conex,$consulta1);
		$consulta2 = "select * from cp where carnet= $carnetx";
		$resultado2 = mysqli_query($conex,$consulta2);
		while ($registro1 = mysqli_fetch_array($resultado2))
		{
			$IDX= $registro1['id_cp'];
		}
		$observacionx ="NINGUNA";
		$consulta3 = "
		INSERT INTO rcp(`fecha`, nota, cp_id) VALUES 
		(CURDATE(),'$observacionx', '$IDX')";
		$resultado3 = mysqli_query($conex,$consulta3);
		if(!$resultado1 or !$resultado3)
		{
			header("location: FORM_REGISTRA_CPersona.PHP?m2='ec'");
	 	}
		else
		{
		header("location: FORM_REGISTRA_CPersona.PHP?m3='SF'");
		}
	}
	else 
	{
		header("location: FORM_REGISTRA_CPersona.PHP?m1='LD'");
	}	

}

if (!isset($_POST['menu']) and !isset($_POST['nuevoI']) and !isset($_POST['register']))
 {
 	 	header("location: FORM_REGISTRA_CPersona.PHP");
}





 //header("location: FORM_REGISTRA_S.php?exito='exito'");
//header("location: FORM_REGISTRA_S.php?error2='error'");        
//header("location: FORM_REGISTRA_S.php?error2='errorsql2'");

 ?>
