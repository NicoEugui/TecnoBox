<?php
	$_GET['Usuario'];
	include('../model/conexion.php');
	mysqli_query($conexion,"drop user '$_GET[Usuario]'") or die("<script language='JavaScript'>alert('Error al intentar eliminar');history.go(-1)</script>");
	header('location:../view/laboratoristas.php');
?>