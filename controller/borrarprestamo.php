<?php
	$FechayHora=$_GET['FechayHora'];
	$ID=$_GET['ID'];
	$CI=$_GET['CI'];
	require('../model/conexion.php');
	mysqli_query($conexion,"delete from `prestamo` where Fechayhora='$FechayHora' and ID=$ID and CI=$CI") or die("<script language='JavaScript'>alert('Error al intentar eliminar');history.go(-1)</script>");
	header('location:../view/prestamos.php');
?>