<?php
	include('../model/conexion.php');
	$FechayHora=$_GET['FechayHora'];
	$ID=$_GET['ID'];
	$CI=$_GET['CI'];
	$result = mysqli_query($conexion, "Select Devolución from prestamo where Fechayhora='$FechayHora' and ID=$ID and CI=$CI");
	$row = mysqli_fetch_array($result);
	if($row['Devolución']==null){
	mysqli_query($conexion,"update `prestamo` set Devolución=NOW() where Fechayhora='$FechayHora' and ID=$ID and CI=$CI");
	header('location:../view/prestamos.php');
	}
	else echo "<script language='JavaScript'>alert('Este préstamo ya fue devuelto');history.go(-1)</script>";
?>