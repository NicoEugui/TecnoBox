<?php
    require('../model/conexion.php');
    $cambiocontraseña=mysqli_connect("localhost", "root", "", "tecnobox");
    if ( $_POST['Actual']==$contraseña) {
        if($_POST['Nueva']==$_POST['Confirmar']){
        mysqli_query($cambiocontraseña, "ALTER USER '$usuario' IDENTIFIED BY '$_POST[Nueva]';") or die("<script language='JavaScript'>alert('Error en el cambio de contraseña');history.go(-1)</script>");
        mysqli_query($cambiocontraseña, "FLUSH PRIVILEGES;");
        header('location:../view/login.php');
        exit;
        }
        else {
            echo "<script language='JavaScript'>alert('No se ingreso la misma nueva contraseña al confirmar');history.go(-1)</script>";
            exit;
        }
    }
    else{
        echo "<script language='JavaScript'>alert('La contraseña actual ingresada no es correcta');history.go(-1)</script>";
        exit;
    }
?> 
