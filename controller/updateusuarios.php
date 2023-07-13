<?php
	require('../model/conexion.php');
	$CI=$_GET['CI'];

	$CIUsuario=$_POST['CI'];
	$Nombre=$_POST['Nombre'];
	$Cargo=$_POST['Cargo'];

	mysqli_query($conexion,"update `usuario` set CI=$CIUsuario, Nombre='$Nombre', Cargo='$Cargo' where CI='$CI'");
	header('location:../view/usuarios.php');
?>