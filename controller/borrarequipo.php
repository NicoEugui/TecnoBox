<?php
	$ID=$_GET['ID'];
	include('../model/conexion.php');
	mysqli_query($conexion,"delete from `equipo` where ID='$ID'") or die("<script language='JavaScript'>alert('Error al intentar eliminar');history.go(-1)</script>");
	header('location:../view/equipos.php');
