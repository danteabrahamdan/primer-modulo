
    	
 <?php 

if (isset($_POST['menu'])  )
{
			 	header("location: ..//index.php");
}

if (isset($_POST['nuevoI']) )
{
			 	header("location: FORM_REGISTRA_S.php");
}


if (isset($_POST['register']))
 {
	if (strlen($_POST['nombre'])>0  and strlen($_FILES['imagen']['name'])>0 )
	 {
		include ("conectar3.php");
		$nomx = $_POST['nombre'];
		$foto = $_FILES['imagen']['name'];
		$ruta = $_FILES['imagen']['tmp_name'];
		$destino = "ARCHIVOS/".$foto;
		copy($ruta, $destino);
		$consulta = "INSERT INTO sujetador(Nombre,imagen) VALUES ('$nomx','$destino')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) 
			{
				header("location: FORM_REGISTRA_S.php?exito='exito'");
	
			} 
		else 
			{			
				header("location: FORM_REGISTRA_S.php?error2='error'");
		}
	 }
	 else
	 {
	 	header("location: FORM_REGISTRA_S.PHP?error='error'");
	 }


}

var_dump($_POST);




 ?>

         
