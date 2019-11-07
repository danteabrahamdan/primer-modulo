
    	
 <?php 

if (isset($_POST['menu'])  )
{
			 	header("location: ..//index.php");
}

if (isset($_POST['nuevoI']) )
{
			 	header("location: FORM_REGISTRA_I.php");
}


if (isset($_POST['register']))
 {
	if (strlen($_POST['nombre'])>0  and strlen($_FILES['imagen']['name'])>0 )
	 {
		include ("conectar3.php");
		$nomx = $_POST['nombre'];
		$foto = $_FILES['imagen']['name'];
		$ruta = $_FILES['imagen']['tmp_name'];
		$catx = $_POST['categoria'];
		$destino = "ARCHIVOS/".$foto;
		copy($ruta, $destino);
		$consulta = "INSERT INTO insignia(Nombre,imagen,categoria) VALUES ('$nomx','$destino','$catxx')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) 
			{
				header("location: FORM_REGISTRA_I.php?exito='exito'");
	
			} 
		else 
			{			
				header("location: FORM_REGISTRA_I.php?error2='error'");
		}
	 }
	 else
	 {
	 	header("location: FORM_REGISTRA_I.PHP?error='error'");
	 }


}

var_dump($_POST);




 ?>

         
