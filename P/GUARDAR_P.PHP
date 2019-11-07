
    	
 <?php 

include ("conectar3.php");
		
if (isset($_POST['menu'])  )
{
			 	header("location: ..//index.php");
}

if (isset($_POST['nuevoI']) )
{
			 	header("location: FORM_REGISTRA_P.php");
}


if (isset($_POST['register']))
 {
	if (strlen($_POST['nombre'])>0 and strlen($_POST['nombre'])>0  and strlen($_FILES['imagen']['name'])>0 )
	 {
		

		$catx = $_POST['categoria'];
		$nomx = $_POST['nombre'];
		$foto = $_FILES['imagen']['name'];
		$ruta = $_FILES['imagen']['tmp_name'];
		$destino = "ARCHIVOS/".$foto;
		copy($ruta, $destino);
		$consulta = "INSERT INTO itemcuello(CATEGORIA,NOMBRE,IMAGEN) VALUES ('$catx','$nomx','$destino')";
		echo "$consulta";
	$resultado = mysqli_query($conex,$consulta);
		if ($resultado) 
			{
				header("location: FORM_REGISTRA_P.php?exito='exito'");
	
			} 
		else 
			{			
		//header("location: FORM_REGISTRA_P.php?error2='error'");
		}
	 }
	 else
	 {
	 	//header("location: FORM_REGISTRA_P.php?error='error'");
	 }


}



 ?>

         
