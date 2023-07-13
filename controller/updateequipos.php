<?php
	require('../model/conexion.php');
	$ID=$_GET['ID'];
 
	$IDEquipo=$_POST['ID'];
	$Nombre=$_POST['Nombre'];
	$Descripcion=$_POST['Descripcion'];
	$Categoria=$_POST['Categoria'];
	$Etiqueta=$_POST['Etiqueta'];
	$Stock=$_POST['Stock'];
 
	mysqli_query($conexion,"update `equipo` set ID=$IDEquipo, Nombre='$Nombre', Descripcion='$Descripcion', Categoria='$Categoria', Etiqueta='$Etiqueta', Stock=$Stock where ID='$ID'");
	header('location:../view/equipos.php');
?>