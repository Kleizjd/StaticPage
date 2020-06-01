<?php
include "../../app/lib/helpers.php";

date_default_timezone_set("America/Bogota");
@session_start();
// cookieLife();
// @sessionLife();
?>
<?php if (isset($_SESSION['rol_usuario'])) : ?>
    <?php if ($_SESSION["rol_usuario"] == 1) : ?>
        <?php include_once "patient.php" ?>
    <?php else : ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../../vendor/styles-js/css/owl.carousel.css" type="text/css" media="all" />
            <!-- Popup-Box-CSS -->
            <link rel="stylesheet" href="../../vendor/styles-js/css/popuo-box.css" type="text/css" media="all" />
            <!-- Left-Menu-Css-->
            <link rel="stylesheet" href="../partials/left-menu.css">
            <?php include_once "../partials/head.php" ?>
        </head>

        <body>
            <!-- Header -->
            <div>
                <div class="header">
                    <!-- Navbar -->
                    <?php include_once "../partials/header.php" ?>
                    <!-- //Navbar -->
                </div>
                <!-- sidebar-wrapper  -->
                <!-- NO MENU LEFT ON PROYECT -->
                <div class="d-md-flex">
                    <!-- SIDE_BAR -->
                    <div id="page-wrapper" class="p-4">
                        <div class="container-fluid " id="cargarVista">
                            <?php include_once "../../app/lib/ajax.php"; ?>
                        </div>
                    </div>
                </div>
                <!-- sidebar-wrapper  -->
                <?php include_once "../partials/log-out.php"; ?>
                <!-- SCRIPTS -->
                <?php include_once "../partials/scripts.php"; ?>
        </body>

    <?php endif; ?>
    <!-- REDIRECT TO LOGIN -->
    <!-- SE REDIRIGE AL LOGIN SI NO HA INICIADO SESIÓN -->
<?php else : header("Location: ../../"); ?>
<?php endif; ?>
