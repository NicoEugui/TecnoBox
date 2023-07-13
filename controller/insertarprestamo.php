<?php
    require('../model/conexion.php');
    $QueryStock = mysqli_query($conexion,"SELECT Stock FROM Equipo where ID=$_REQUEST[ID]");
    $Stock=mysqli_fetch_array($QueryStock);
    $QueryCantidad = mysqli_query($conexion,"SELECT sum(Cantidad) FROM prestamo where ID=$_REQUEST[ID] and Devolución is null");
    $Cantidadprestada=mysqli_fetch_array($QueryCantidad);
    $StockDisponible=$Stock['Stock']-$Cantidadprestada['sum(Cantidad)'];
    if($StockDisponible>=$_REQUEST['Cantidad']){
        mysqli_query($conexion, "insert into prestamo(Fechayhora,ID,CI,Plazo,Cantidad,Usuario) values ('$_REQUEST[FechayHora]',$_REQUEST[ID],$_REQUEST[CI],'$_REQUEST[Plazo]',$_REQUEST[Cantidad],'$usuario')")
        or die("<script language='JavaScript'>alert('Error en el ingreso');history.go(-1)</script>");
        echo "<script language='JavaScript'>history.go(-1)</script>";
        exit;
    }
    else {
    echo "<script language='JavaScript'>alert('Error en el préstamo: La cantidad que quieres prestar es mayor al Stock Disponible');history.go(-1)</script>";
    exit;
    }
