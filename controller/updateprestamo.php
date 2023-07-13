<?php
require('../model/conexion.php');
$FechayHora = $_GET['Fechayhora'];
$ID = $_GET['ID'];
$CI = $_GET['CI'];
$result = mysqli_query($conexion, "SELECT * FROM prestamo where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
$row = mysqli_fetch_array($result);
if (empty($_POST['FechayHora'])) {
	if (!empty($_POST['Devolucion']))
		mysqli_query($conexion, "update `prestamo` set Fechayhora='$row[Fechayhora]',ID=$_REQUEST[ID],CI=$_REQUEST[CI],Plazo='$_REQUEST[Plazo]',Cantidad=$_REQUEST[Cantidad],Devolución='$_REQUEST[Devolucion]' where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
	else mysqli_query($conexion, "update `prestamo` set Fechayhora='$row[Fechayhora]',ID=$_REQUEST[ID],CI=$_REQUEST[CI],Plazo='$_REQUEST[Plazo]',Cantidad=$_REQUEST[Cantidad],Devolución=NULL where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
	header('location:../view/prestamos.php');
} else {
	if (!empty($_POST['Devolucion']))
		mysqli_query($conexion, "update `prestamo` set Fechayhora='$_POST[FechayHora]',ID=$_REQUEST[ID],CI=$_REQUEST[CI],Plazo='$_REQUEST[Plazo]',Cantidad=$_REQUEST[Cantidad],Devolución='$_REQUEST[Devolucion]' where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
	else mysqli_query($conexion, "update `prestamo` set Fechayhora='$_REQUEST[FechayHora]',ID=$_REQUEST[ID],CI=$_REQUEST[CI],Plazo='$_REQUEST[Plazo]',Cantidad=$_REQUEST[Cantidad],Devolución=NULL where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
	header('location:../view/prestamos.php');
}
