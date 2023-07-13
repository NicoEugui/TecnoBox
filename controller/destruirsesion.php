<?php
	include('../model/conexion.php');
	session_destroy();
	header('location:../view/login.php');
?>