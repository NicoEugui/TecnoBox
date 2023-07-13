<?php
session_start();
$usuario = $_SESSION['username'];
$contraseña = $_SESSION['password'];
$conexion = mysqli_connect("localhost", $usuario, $contraseña, "tecnobox") or die("<html><script language='JavaScript'>alert('Error al ingresar al sistema, revise los datos de inicio de sesión'),location.assign('../view/login.php');</script></html>");
