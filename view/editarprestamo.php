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
    <title>Editar Prestamo - TecnoBox</title>

    <!-- Fontfaces CSS-->
    <link href="../view/css/font-face.css" rel="stylesheet" media="all">
    <link href="../view/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../view/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../view/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../view/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../view/css/theme.css" rel="stylesheet" media="all">

</head>
<?php
session_start();
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
                                                <i class="zmdi zmdi-power"></i>Cerrar Sesion</a>
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
                                                        <i class="zmdi zmdi-power"></i>Cerrar Sesion</a>
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
            <?php
            $FechayHora = $_GET['FechayHora'];
            $ID = $_GET['ID'];
            $CI = $_GET['CI'];
            $query = mysqli_query($conexion, "select * from `prestamo` where Fechayhora='$FechayHora' and ID='$ID' and CI='$CI'");
            $row = mysqli_fetch_array($query);
            ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6 mx-auto">

                                <div class="card bg-dark text-white">
                                    <div class="card-header text-center">
                                        <h3 style="color:white">Edicion De Prestamo</h3>
                                    </div>
                                    <div class="card-body card-block justify-content-start">
                                        <form method="POST" action="../controller/updateprestamo.php?Fechayhora=<?php echo $row['Fechayhora']; ?>&ID=<?php echo $row['ID']; ?>&CI=<?php echo $row['CI']; ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Identificador del Equipo</label>
                                                    <input type="tel" class="form-control" name="ID" value="<?php echo $row['ID']; ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>CI Usuario</label>
                                                    <input type="text" class="form-control" name="CI" value="<?php echo $row['CI']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label">Cantidad</label>
                                                    <input type="number" name="Cantidad" value="<?php echo $row['Cantidad']; ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label">Fecha y Hora</label>
                                                    <input type="datetime-local" name="FechayHora" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label">Plazo de Entrega</label>
                                                    <input type="date" name="Plazo" class="form-control" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label">Fecha de Devolución</label>
                                                    <input type="date" name="Devolucion" class="form-control" />
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
    <script src="../view/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../view/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../view/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../view/vendor/slick/slick.min.js">
    </script>
    <script src="../view/vendor/wow/wow.min.js"></script>
    <script src="../view/vendor/animsition/animsition.min.js"></script>
    <script src="../view/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../view/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../view/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../view/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../view/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../view/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../view/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../view/js/main.js"></script>

</body>

</html>
<!-- end document-->