<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="application-name" content="Gestion de recursos informaticos de instituciones educativas." />
	<meta name="keywords" content="Tecnobox, UTU, Prestamos, Uruguay, Gestion de recursos informaticos, Proyecto UTU, Mercedes, BackEndSolutions" />
    <meta name="author" content="BackEndSolutions">

    <!-- Title Page-->
    <title>Prestamos - TecnoBox</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php
require('../model/conexion.php');
?>

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn"> <?php echo $usuario ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="content">
                                        <div class="account-dropdown__footer">
                                            <a href="../controller/destruirsesion.php">
                                                <i class="zmdi zmdi-power"></i>Cerrar Sesión</a>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="../view/cambiarcontraseña.php">
                                                <i class="zmdi zmdi-lock"></i>Cambiar Contraseña</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="usuarios.php">
                                <i class="fas fa-user"></i>Usuarios</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="equipos.php">
                                <i class="fas fa-box"></i>Equipos/Insumos</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="prestamos.php">
                                <i class="fas fa-calendar-check"></i>Préstamos</a>
                        </li>

                        <li>
                            <a href="laboratoristas.php">
                                <i class="fas fa-address-card"></i>Laboratoristas</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/logo_white.png" alt="TecnoBox" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="usuarios.php">
                                <i class="fas fa-user"></i>Usuarios</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="equipos.php">
                                <i class="fas fa-box"></i>Equipos/Insumos</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="prestamos.php">
                                <i class="fas fa-calendar-check"></i>Préstamos</a>
                        </li>

                        <li>
                            <a href="laboratoristas.php">
                                <i class="fas fa-address-card"></i>Laboratoristas</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." /> -->
                                <!-- <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="menu-icono">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" style="color:white"> <?php echo $usuario ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="content">
                                                <div class="account-dropdown__footer">
                                                    <a href="../controller/destruirsesion.php">
                                                        <i class="zmdi zmdi-power"></i>Cerrar Sesión</a>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="../view/cambiarcontraseña.php">
                                                        <i class="zmdi zmdi-lock"></i>Cambiar Contraseña</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6 mx-auto">

                                <div class="card bg-dark text-white">
                                    <div class="card-header text-center">
                                        <h3 style="color:white">Creación de préstamo</h3>
                                    </div>
                                    <div class="card-body card-block justify-content-start">
                                        <form method="POST" action="../controller/insertarprestamo.php">
                                            <div class="form-group">
                                                <label class="form-control-label">Cédula de identidad</label>
                                                <input type="tel" class="form-control" name="CI" placeholder="Ingrese CI de la persona" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Identificador del equipo</label>
                                                <input type="tel" class="form-control" name="ID" placeholder="Ingrese identificador del equipo" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Cantidad</label>
                                                <input type="number" class="form-control" name="Cantidad" value=1 min=1 max=99 placeholder="Ingrese cantidad" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Fecha y hora</label>
                                                    <input type="datetime-local" name="FechayHora" class="form-control" />
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label">Plazo de entrega</label>
                                                    <input type="date" name="Plazo" required class="form-control" required />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">
                                                <i class="far fa-save"></i> Guardar
                                            </button>
                                            <button type="reset" class="btn btn-danger">
                                                <i class="fas fa-eraser"></i> Borrar campos
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <h3 style="color:white">Usuarios</h3>
                                    <br>
                                    <div class="form-inline col-md-12 justify-content-center" method="GET">
                                        <form action="">
                                            <input type="search" name="BusquedaUsuario" autocomplete="off" placeholder="Busque Nombre o C.I." class="form-control">
                                            <button type="submit" class="btn btn-outline-success" style="margin: 10px">
                                                <i class="fas fa-search"></i> Buscar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table-responsive text-center table--no-card m-b-40" style="height: 300px;overflow-y: scroll;">
                                        <table class="table text-center">
                                            <thead style="position: sticky;top: 0" class="thead-dark">
                                                <tr>
                                                    <th>C.I.</th>
                                                    <th>Nombre</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($_GET['BusquedaUsuario'])) {
                                                    $Busqueda = $_GET['BusquedaUsuario'];
                                                    $result = mysqli_query($conexion, "SELECT CI,Nombre FROM usuario where CI Like '$Busqueda%' or Nombre Like '%$Busqueda%' order by Nombre ASC");
                                                } else
                                                    $result = mysqli_query($conexion, "SELECT CI,Nombre FROM usuario order by Nombre ASC");
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr class="bg-dark text-white">
                                                        <td><?php echo $row['CI']; ?></td>
                                                        <td><?php echo $row['Nombre']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center">
                                    <h3 style="color:white">Equipos/Insumos Disponibles</h3>
                                    <br>
                                    <div class="form-inline col-md-12 justify-content-center" method="GET">
                                        <form action="">
                                            <input type="search" name="BusquedaEquipo" autocomplete="off" placeholder="ID,Nombre o Etiqueta" class="form-control">
                                            <button type="submit" class="btn btn-outline-success" style="margin: 10px">
                                                <i class="fas fa-search"></i> Buscar
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="table-responsive text-center table--no-card m-b-40" style="height: 300px;overflow-y: scroll;">
                                        <table class="table text-center">
                                            <thead style="position: sticky;top: 0" class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Etiqueta</th>
                                                    <th>Stock Disponible</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (isset($_GET['BusquedaEquipo'])) {
                                                    $Busqueda = $_GET['BusquedaEquipo'];
                                                    $result = mysqli_query($conexion, "SELECT equipo.ID,Nombre,Etiqueta,Stock FROM equipo left join prestamo on equipo.ID=prestamo.ID where equipo.ID Like '$Busqueda%' and Devolución is null and Fechayhora is null or Nombre Like '%$Busqueda%' and Devolución is null and Fechayhora is null or Etiqueta Like '$Busqueda%' and Devolución is null and Fechayhora is null or equipo.ID Like '$Busqueda%' and Devolución is not null or Nombre Like '%$Busqueda%' and Devolución is not null or Etiqueta Like '$Busqueda%' and Devolución is not null group by ID");
                                                } else {
                                                    $result = mysqli_query($conexion, "SELECT equipo.ID,Nombre,Etiqueta,Stock FROM equipo left join prestamo on equipo.ID=prestamo.ID where Devolución is not null or Devolución is null and Fechayhora is null group by ID");
                                                }
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $Calculocantidad = mysqli_query($conexion, "SELECT sum(Cantidad) FROM prestamo where ID=$row[ID] and Devolución is null");
                                                    $Cantidadprestada = mysqli_fetch_array($Calculocantidad);
                                                    $StockDisponible = $row['Stock'] - $Cantidadprestada['sum(Cantidad)'];
                                                    if ($StockDisponible != 0) {
                                                ?>


                                                        <tr class="bg-dark text-white text-center">
                                                            <td><?php echo $row['ID']; ?></td>
                                                            <td><?php echo $row['Nombre']; ?></td>
                                                            <td><?php echo $row['Etiqueta']; ?></td>
                                                            <td><?php echo $StockDisponible ?></td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <h3 style="color:white">Registros</h3>
                                </div>
                                <div class="form-inline col-md-6">
                                    <form action="" method="GET">
                                        <input type="search" name="Busqueda" autocomplete="off" placeholder="C.I., ID o Laboratorista" class="form-control">
                                        <button type="submit" class="btn btn-outline-success" style="margin: 10px">
                                            <i class="fas fa-search"></i> Buscar
                                        </button>
                                    </form>
                                </div>
                                <!-- DATA TABLE-->
                                <div class="table-responsive text-center table-data table--no-card m-b-40">
                                    <table class="table text-center">
                                        <thead style="position: sticky;top: 0;" class="thead-dark">
                                            <tr>
                                                <th>Laboratorista</th>
                                                <th>C.I. Usuario</th>
                                                <th>ID Equipo/Insumo</th>
                                                <th>Cantidad</th>
                                                <th>Fecha y hora</th>
                                                <th>Plazo entrega</th>
                                                <th>Devuelto</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['Busqueda'])) {
                                                $Busqueda = $_GET['Busqueda'];
                                                $result = mysqli_query($conexion, "SELECT * FROM prestamo where CI Like '$Busqueda%' or ID Like '%$Busqueda%' or Usuario Like '%$Busqueda%' order by Fechayhora DESC");
                                            } else
                                                $result = mysqli_query($conexion, "SELECT * FROM prestamo order by Fechayhora DESC");
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr class="bg-dark text-white">
                                                    <td><?php echo $row['Usuario']; ?></td>
                                                    <td><?php echo $row['CI']; ?></td>
                                                    <td><?php echo $row['ID']; ?></td>
                                                    <td><?php echo $row['Cantidad']; ?></td>
                                                    <td><?php echo $row['Fechayhora']; ?></td>
                                                    <td><?php echo $row['Plazo']; ?></td>
                                                    <td class="process"><?php echo $row['Devolución']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="editarprestamo.php?FechayHora=<?php echo $row['Fechayhora']; ?>&ID=<?php echo $row['ID']; ?>&CI=<?php echo $row['CI']; ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>

                                                            <a href="../controller/borrarprestamo.php?FechayHora=<?php echo $row['Fechayhora']; ?>&ID=<?php echo $row['ID']; ?>&CI=<?php echo $row['CI']; ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Borrar permanente">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                            <a href="../controller/devolverprestamo.php?FechayHora=<?php echo $row['Fechayhora']; ?>&ID=<?php echo $row['ID']; ?>&CI=<?php echo $row['CI']; ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Dar como devuelto">
                                                                    <i class="zmdi zmdi-check-square"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                    </div>
                    <footer class="page-footer font-small">
                        <!-- Copyright -->
                        <div class="footer-copyright text-center py-3">
                            <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Obra publicada con <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento Compartir igual 4.0</a>.
                        </div>
                        <!-- Copyright -->
                    </footer>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <!-- Main JS-->
        <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->