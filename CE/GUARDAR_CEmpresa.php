
    	
 <?php 

if (isset($_POST['menu'])  )
{
			 	header("location: ..//index.php");
}

if (isset($_POST['nuevoI']) )
{
			 	header("location: FORM_REGISTRA_CEmpresa.php");
}


if (isset($_POST['register']))
 {

 	if (strlen($_POST['correo'])>0 and
 		strlen($_POST['telefono'])>0 and
 		strlen($_POST['direccion'])>0 
	   )
  {
 		
 	
		include ("conectar3.php");
		$nitx= $_POST['nit'];
		$nomx= $_POST['nombre_e'];
		$corx= $_POST['correo'];
		$telx= $_POST['telefono'];
		$dirx= $_POST['direccion'];
		


		$consulta1 = "
		INSERT INTO ce(nit,nombre_e,correo,telefono,direccion) VALUES 
		('$nitx','$nomx','$corx','$telx','$dirx')		
		";
		$resultado1 = mysqli_query($conex,$consulta1);
		$consulta2 = "select * from cE where nit= $nitx";
		$resultado2 = mysqli_query($conex,$consulta2);
		while ($registro1 = mysqli_fetch_array($resultado2))
		{
			$IDX= $registro1['id_ce'];
		}
		$notax ="NINGUNA";
		$consulta3 = "
		INSERT INTO rce(nota,ce_id,fecha) VALUES 
		('$notax','$IDX',CURDATE())
		";
		$resultado3 = mysqli_query($conex,$consulta3);
		
		if(!$resultado1 or !$resultado3)
		{

		header("location: FORM_REGISTRA_CEmpresa.PHP?m2='ec'");
	 	}
		else
		{
		header("location: FORM_REGISTRA_CEmpresa.PHP?m3='SF'");
		}
	}
	else 
	{
		header("location: FORM_REGISTRA_CEmpresa.PHP?m1='LD'");
	}	

}

if (!isset($_POST['menu']) and !isset($_POST['nuevoI']) and !isset($_POST['register']))
 {
 	 //	header("location: FORM_REGISTRA_CEmpresa.PHP");
}





 //header("location: FORM_REGISTRA_S.php?exito='exito'");
//header("location: FORM_REGISTRA_S.php?error2='error'");        
//header("location: FORM_REGISTRA_S.php?error2='errorsql2'");

 ?>
