<?php
    require('../model/conexion.php');
        mysqli_query($conexion, "insert into equipo(Nombre, Categoria, Descripcion, Etiqueta, Stock) values ('$_REQUEST[Nombre]','$_REQUEST[Categoria]','$_REQUEST[Descripcion]','$_REQUEST[Etiqueta]','$_REQUEST[Stock]')")
        or die("<script language='JavaScript'>alert('Error en el ingreso');history.go(-1)</script>");
        echo "<script language='JavaScript'>history.go(-1)</script>";
        exit;
    