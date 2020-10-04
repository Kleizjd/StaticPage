<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PsicoApp/Web </title>
    <!-- <link rel="stylesheet" href="../../vendor/jquery-3.5.0.min.js"> -->
    <script src="../../vendor/jquery/jquery.slim.min.js"></script>

    <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/template/my-css-js/css/style.css">
    <link rel="stylesheet" href="../../assets/template/my-css-js/css/form-validation.css">
    <!-- Custom styles for this template-->
    <!-- Popup-Box-CSS -->
    <link rel="stylesheet" href="../../assets/template/my-css-js/css/popuo-box.css" type="text/css" media="all" />
    <link  rel="stylesheet" href="../../vendor/sb-admin-2-2019/css/sb-admin.css">
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="../../vendor/sb-admin-2-2017/lib/metisMenu/css/metisMenu.min.css" >
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="../../vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../partials/patient/left-menu.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="bg-secondary">
    <!-- Header -->
    <div class="header">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">PsicoApp/Web</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <!-- <li class="hover-effect"><a href="#description">Encuesta</a></li> -->
                    <li class="nav-item">
                        <a class="btn btn-secondary my-2 my-sm-0" href="#">

                            <?= $_SESSION['nombre_completo']; ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-question-circle"></i>
                            <!-- <span class="badge badge-danger">7</span> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                            <a class="dropdown-item" href="#">THIS PROGRAM WAS DEVELOPED BY CRISTHIAN</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <!-- <a class="dropdown-item" href="#" id="viewAcount"> -->
                            <input type="hidden" name="userId" id="userId" value="<?= $_SESSION['user_id']; ?>">
                            <!-- <i class="fas fa-cog">&nbsp;Configuracion</i></a>
                            <a class="dropdown-item" href="#">Activity Log</a>
                            <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //Navbar -->
    </div>


    <div class="py-5 text-center">
        <h2>Encuesta</h2>
        <p class="lead">Abajo encontrara una serie de preguntas que nos permitira sacar una conclusion ,<br>sabiendo como tomas y tienes una persepcion de lo que eres capaz.</p>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
            <h4 class="mb-3">Buena Suerte </h4>
            <form action="" id="form_Survey" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="correo" value="<?= $_SESSION['correo_login']; ?>">
                <div class="mb-3">
                    <label for="numberOne">1. ¿Cuál es la diferencia entre vivir y existir?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberOne" name="numberOne" placeholder="¿Cuál es la diferencia entre vivir y existir?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberTwo">2. ¿Qué es lo que más detestas de una persona? ¿Por que?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberTwo" name="numberTwo" placeholder="¿Qué es lo que más detestas de una persona? ¿Por que?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberThree">3. ¿Qué harías de otra manera si supieras que nadie te juzgará?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberThree" name="numberThree" placeholder="¿Qué harías de otra manera si supieras que nadie te juzgará?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberFour">4. ¿Cuál es la promesa más importante que te has hecho?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberFour" name="numberFour" placeholder="¿Cuál es la promesa más importante que te has hecho?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberFive">5. ¿Cómo podemos tener relaciones saludables?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberFive" name="numberFive" placeholder="¿Cómo podemos tener relaciones saludables?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberSix">6 ¿Cuál es el significado de la vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberSix" name="numberSix" placeholder="¿Cuál es el significado de la vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberSeven">7 ¿Cómo mides la vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberSeven" name="numberSeven" placeholder="¿Cómo mides la vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberEight">8 ¿Estás en control de tu vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberEight" name="numberEight" placeholder="¿Estás en control de tu vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberNine">9 ¿Por qué a veces te comportas así?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberNine" name="numberNine" placeholder="¿Por qué a veces te comportas así?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numberTen">10 ¿Cómo puedes cambiar tu vida?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numberTen" name="numberTen" placeholder="¿Cómo puedes cambiar tu vida?" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            this question is required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar respuestas</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1" style="color: #ffffff;">&copy; 2017-2020 Twins Develop</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>
    <!-- <script src="vendor/jquery/jquery.slim.min.js"></script> -->
    <script>
        window.jQuery || document.write('<script src="../../vendor/jquery/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../../vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/template/my-css-js/js/form-validation.js"></script>
       <!-- LOG OUT --> <?php include_once "../partials/log-out.php"; ?>
      
      <!-- [ SCRIPTS ]Custom scripts for all pages-->
      <!-- <script src="../../vendor/sb-admin-2-2019/js/sb-admin.min.js"></script> -->

    <?php include_once "../partials/scripts.php"; ?>
</body>

</html>
</body>

</html>
<script>
    $(document).ready(function(){
        $(function answerSurvey(){
            $(document).on("submit", "#form_Survey", function(event){
            event.preventDefault();
                var formData = new FormData(event.target);
                // TODO: add the fields
                
                formData.append('module', 'Survey');
                formData.append('controller', 'Survey');
                formData.append('nameFunction', 'answerSurvey');
                
                $.ajax({
                    url: '../../app/lib/ajax.php',
                    method: $(this).attr('method'),
                    dataType: 'JSON',
                    data: formData ,
                    cache: false,
                    processData: false,
                    contentType: false
                }).done((res) => {
                // TODO: add the fields
                    if(res.typeAnswer == "success"){
                        swal({
                        title: "Enviado con exito",
                        type: "success"
                     });
                    }
                })
            });
        });
    });
</script>