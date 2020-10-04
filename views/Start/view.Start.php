<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- STYLES -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="assets/template/my-css-js/css/style.css">
    <!-- Owl-Carousel-CSS -->
    <link rel="stylesheet" href="assets/template/my-css-js/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Popup-Box-CSS -->
    <link rel="stylesheet" href="assets/template/my-css-js/css/popuo-box.css" type="text/css" media="all" />
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="vendor/sweetalert/css/sweetalert2.min.css">
    <link rel="shortcut icon" href="public/img/favicon/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="vendor/css/style.css"> -->
    <style>
        /* #cuerpo {
            background: black;
    
        }
     */
        #mision {
            background: #d181f3;
        }

        #vision {
            background: #e3b8fe;

        }

        #historia {
            background: #d181f3;

        }

        #targeta {
            background: #e3b8fe;

        }

        #tit_ingre {

            background: #d181f3;
        }

        #agregar {
            background: #d181f3;
            border-bottom: black;
            font-style: black;
        }

        /*-- Contact --*/
        .contact {
            background: url("vendor/images/salud mental.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 50px 0 75px;
            opacity: 0.9;
        }

        .contact_form input[type='text'] {
            width: 100%;
            border-radius: 0;
            line-height: 22px;
            font-size: 14px;
            padding: 14px 17px 14px;
            outline: none;
            color: #FFF;
            height: 50px;
            border: 1px solid #d5d5d5;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 0 20px;
            background: rgba(7, 7, 7, 0.719);
        }

        .contact_form textarea {
            width: 100%;
            border-radius: 0;
            line-height: 22px;
            font-size: 14px;
            padding: 14px 17px 14px;
            outline: none;
            border: 1px solid #d5d5d5;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            resize: none;
            color: #FFF;
            height: 191px;
            background: rgba(7, 7, 7, 0.897);
        }

        form.contact_form {
            text-align: center;
        }

        input.text:active,
        input.text:focus {
            background-color: rgba(0, 0, 0, 0.84);
        }

        textarea:active,
        textarea:focus {
            background-color: rgba(0, 0, 0, 0.84);
        }

        .more_btn {
            margin-top: 50px;
            padding: 13px 30px;
            border: 1px solid #d5d5d5;
            font-size: 16px;
            color: #FFF;
            background-color: rgba(51, 51, 51, 0.61);
            text-decoration: none;
            outline: none;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }

        .more_btn:hover {
            color: #FFF;
            background-color: rgba(0, 0, 0, 0.84);
            cursor: pointer;
        }

        /*-- //Contact --*/
    </style>
</head>

<body>
    <!-- Header -->
    <div>
        <div class="header">
            <!-- Navbar -->
            <?php include_once "partials/contenido/navbar-bootstrap.php" ?>
            <!-- //Navbar -->
        </div>
        <div class="container-fluid ">
            <!-- BODY -->
            <?php // include_once "app/lib/ajax.php"; <<< UNABLE HERE >>

                 $page  = isset($_GET['p']) ? strtolower($_GET['p']) : 'main';
              if ($page  == 'main') { require_once 'views/Start/' . $page . '.php'; } else {  require_once 'views/' . $page . '.php'; }
            ?>
        </div>
        <!-- SCRIPTS -->
        <?php include_once "partials/scripts.php"; ?>
</body>

</html>