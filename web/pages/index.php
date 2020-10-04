<?php
include "../../app/lib/helpers.php";

date_default_timezone_set("America/Bogota");
@session_start();
// cookieLife();
// @sessionLife();
?>

<?php if (isset($_SESSION['rol_usuario'])) : ?>
    <?php if ($_SESSION["rol_usuario"] == 2) : ?>
        <?php include_once "patient.php" ?>
    <?php else : ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <?php include_once "../partials/head.php"; ?>
        </head>

        <body class="skin-default-dark fixed-layout">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- <div class="preloader">
                <div class="loader">
                    <div class="loader__figure"></div>
                    <p class="loader__label">PsicoApp/web</p>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- Main wrapper - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <div id="main-wrapper">
                <!-- ============================================================== -->
                <!-- Topbar header - style you can find in pages.scss -->
                <!-- ============================================================== -->
                <header class="topbar">
                    <?php include_once "../partials/header.php"; ?>
                </header>
                <!-- ============================================================== -->
                <!-- End Topbar header -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <?php include_once "../partials/menu.php"; ?>
                <!-- ============================================================== -->
                <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page wrapper  -->
                <!-- ============================================================== -->
                <div class="page-wrapper" id="loadView">
                    <div class="container-fluid">
                        <?php include_once "../../app/lib/ajax.php"; ?>
                    </div>
                </div>

                <footer class="footer">
                    <span> &copy;Copyright <?=date("Y"); ?> Best -Jose Daniel Grijalba Osorio</span>
                    <!-- © 2018 Best -Jose Daniel Grijalba Osorio -->
                </footer>

            </div>
            <!-- <div class="jq-toast-wrap top-right">
                <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;-o-transition: width 3.1s ease-in;transition: width 3.1s ease-in;background-color: #ff6849;"></span><span class="close-jq-toast-single">×</span>
                    <h2 class="jq-toast-heading">Welcome to Elegant admin</h2>Use the predefined ones, or specify a custom position object.
                </div>
            </div> -->
            <?php include_once "../partials/log-out.php"; ?>
            <!-- SCRIPTS -->
            <?php include_once "../partials/scripts.php"; ?>
        </body>
        </html>
    <?php endif; ?>
    <!-- REDIRECT TO LOGIN -->
    <!-- SE REDIRIGE AL LOGIN SI NO HA INICIADO SESIÓN -->
<?php else : header("Location: ../../"); ?>
<?php endif; ?>
<input type="hidden" name="userId" id="userId" value="<?= $_SESSION['correo_login']; ?>">

