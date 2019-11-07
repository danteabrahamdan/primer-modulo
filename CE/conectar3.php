<?php 

$server='localhost';
$uid='root';
$pwd='';
$bd='proyecto1';
$conex= mysqli_connect($server,$uid,$pwd,$bd);


if ($conex) 
	{
	
	}
	else
	{echo 'error de coneccion';
	}


 ?>