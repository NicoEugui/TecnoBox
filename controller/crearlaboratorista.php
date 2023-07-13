<?php
    require('../model/conexion.php');
    if ( isset( $_POST['Usuario'] ) && $_POST['Contraseña']==$_POST['ConfirmarContraseña']) {
        mysqli_query($conexion, "create user '$_POST[Usuario]' identified by '$_POST[Contraseña]' ")
        or die("<script language='JavaScript'>alert('Error en el registro');history.go(-1)</script>");
        switch($_POST['Tipo']){
            case 'Administrador': mysqli_query($conexion," GRANT SELECT, INSERT, UPDATE, DELETE, FILE, SHOW DATABASES, CREATE USER ON *.* TO '$_POST[Usuario]' with grant option"); break;;
            case 'Laboratorista': mysqli_query($conexion," GRANT SELECT, INSERT, UPDATE, DELETE ON tecnobox.* TO '$_POST[Usuario]'"); break;;
            case 'Docente': mysqli_query($conexion," GRANT SELECT ON tecnobox.* TO '$_POST[Usuario]'"); break;;
        }
        echo "<script language='JavaScript'>history.go(-1)</script>";
        exit;
    }
    else echo "<script language='JavaScript'>alert('La contraseña ingresada no es igual a la repetición de la contraseña.');history.go(-1)</script>";
?> 
