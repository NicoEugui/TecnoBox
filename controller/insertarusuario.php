<?php
    require('../model/conexion.php');
    if ( isset( $_POST['CI'] ) && isset( $_POST['Nombre']) ) {
        mysqli_query($conexion, "insert into usuario(CI,Nombre,Cargo) values ($_REQUEST[CI],'$_REQUEST[Nombre]','$_REQUEST[Cargo]')")
        or die("<script language='JavaScript'>alert('Error en el ingreso');history.go(-1)</script>");
        echo "<script language='JavaScript'>history.go(-1)</script>";
        exit;
    }
?> 