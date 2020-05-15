<?php
include "../../app/lib/helpers.php";

date_default_timezone_set("America/Bogota");
@session_start();
// cookieLife();
// @sessionLife();
?>
<?php if (isset($_SESSION['user_role'])) : ?>
    <?php if ($_SESSION["user_role"] == 2) : ?>
        <?php include_once "psicologo.php" ?>
    <?php else : ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- STYLES -->
            <script src="../../vendor/jquery/jquery.slim.min.js"></script>
            <link rel="stylesheet" href="../../vendor/styles-js/css/style.css">
            <!-- Owl-Carousel-CSS -->
            <link rel="stylesheet" href="../../vendor/styles-js/css/owl.carousel.css" type="text/css" media="all" />
            <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
            <!-- Popup-Box-CSS -->
            <link rel="stylesheet" href="../../vendor/styles-js/css/popuo-box.css" type="text/css" media="all" />

            <!-- <link rel="stylesheet" href="vendor/styles-js/css/Mision_Vision_historia.css"> -->
        </head>

        <body>
            <!-- Header -->
            <div>
                <div class="header">
                    <!-- Navbar -->
                    <?php include_once "partials/contenido/navbar-bootstrap.php" ?>
                    <!-- //Navbar -->
                </div>
                <!-- sidebar-wrapper  -->
                    <!-- NO MENU LEFT ON THE PROYECT -->
                <!-- sidebar-wrapper  -->
                <div class="container-fluid ">
                    <!-- DINAMIC-PAGE CONTENT -->
                    <?php include_once "../../app/lib/ajax.php"; ?>
                </div>
                <!-- SCRIPTS -->
                <?php include_once "partials/scripts.php"; ?>
        </body>

        <?php endif; ?>
        <!-- REDIRECT TO LOGIN -->
        <!-- SE REDIRIGE AL LOGIN SI NO HA INICIADO SESIÓN -->
    <?php else : header("Location: ../../"); ?>
    <?php endif; ?>