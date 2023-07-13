<?php
	$CI=$_GET['CI'];
	require('../model/conexion.php');
	mysqli_query($conexion,"delete from `usuario` where CI='$CI'") or die("<script language='JavaScript'>alert('Error al intentar eliminar');history.go(-1)</script>");
	header('location:../view/usuarios.php');
?>