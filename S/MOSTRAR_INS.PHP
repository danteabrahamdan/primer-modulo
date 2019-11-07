
<?php


require "conectar3.php";
 $consulta = "SELECT * FROM sujetador";
 $resultado = mysqli_query($conex,$consulta);

echo"<h1><center>SUJETADORES</center></h1>";

while ($res = mysqli_fetch_array($resultado)) 
{
$a = $res['imagen'];
    

echo
"
<center><table width=\"25%\" BORDER=\"10\" >
<tr>
<td>

SUJETADOR <br>
".'<CENTER><IMG    src="'.$a.'" width="50%" heigth="50%"></CENTER>'."<br>
CATEGORIA:".$res['categoria']."<br>
NOMBRE: ".   $res['nombre']."<br>

</td>

</tr>
</table>
</center>
";
echo"<br><br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
 <form   method="POST" action="guardarSujetadores.php"  >
    	
    	
        
       <center><input type="submit" name="menu" value="MENU PRINCIPAL"></center>
       <center><input type="submit" name="nuevoI" value="NUEVO ITEM"></center>
</body>
</html>