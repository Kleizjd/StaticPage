<!DOCTYPE html>
    <html lang="es">

    <head>
      <!-- <link rel="stylesheet" href="../../vendor/styles-js/css/style.css"> -->
      <!-- Owl-Carousel-CSS -->
      <link rel="stylesheet" href="../../vendor/styles-js/css/owl.carousel.css" type="text/css" media="all" />
      <!-- Popup-Box-CSS -->
      <link rel="stylesheet" href="../../vendor/styles-js/css/popuo-box.css" type="text/css" media="all" />
      <!-- Left-Menu-Css-->
      <link rel="stylesheet" href="../partials/patient/left-menu.css">
      <?php include_once "../partials/head.php" ?>
    </head>

    <body style="background-color: #e3f2fd">
      <div class="page-wrapper chiller-theme toggled">
        <?php include_once "../partials/header.php" ?>
        <a id="show-sidebar" class="btn btn-sm btn-light" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <?php include_once "../partials/patient/left-menu.php" ?> 
        <!-- sidebar-wrapper  -->
        <main class="page-content">
          <div class="contrainer-fluid" id="cargarVista">
            <?php include_once "../../app/lib/ajax.php"; ?>
          </div>
        </main>
        <!-- page-content" -->
      </div>
      <!-------------------- page-wrapper ---------------------------------->
      <!-- FOOTER -->
      <?php include_once "../partials/footer.php"; ?>
      <!-- LOG OUT -->
      <?php include_once "../partials/log-out.php"; ?>
      <!-- SCRIPTS -->
      <!-- Custom scripts for all pages-->
      <script src="../../vendor/sb-admin-2-2019/js/sb-admin.min.js"></script>
    <!--  scripts --> <?php include_once "../partials/scripts.php"; ?>

    </body>
    </html>