<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendor/sweetalert/css/sweetalert2.min.css">
    <link href="assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/dist/css/style.min.css" rel="stylesheet">

</head>

<body>

    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/fondo-login-1024x427.jpg);">
            <div class="login-box card">
                <div class="card-header">
                    <div class="justify-content-center row">
                        <div class="col-10">
                            <h1> Apps</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal form-material" id="form_session" action="" method="POST" autocomplete="off" >
                        <!-- <form class="form-horizontal form-material" id="loginform" action="index.html"> -->

                            <!-- <h3 class="box-title m-b-20">Registrarse</h3> -->
                            <div class="form-group ">
                                <!-- <input class="form-control" type="text" required="" placeholder="Username"> </div> -->
                                <input type="text" class="form-control" placeholder="Login" name="user" id="user" autofocus required>
                            </div>
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>

                                <button type="button" class="btn btn-outline-primary showPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Recordarme</label>
                                        <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> olvidaste la contraseña?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                <!-- <input type="submit" class="btn btn-lg btn-primary btn-block" value="Ingresar"> -->
                                    <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Ingresar</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                    <div class="social">
                                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook"></i> </a>
                                        <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    No tienes cuenta? <a href="pages-register.html" class="text-info m-l-5"><b>Registrate</b></a>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" id="recoverform" action="index.html">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <h3>Recuperar Contraseña</h3>
                                    <p class="text-muted">Ingresa tu correo y se te enviaran las instrucciones para restablacerla! </p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Email"> </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12"> 
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>
                            <a class="d-block small mt-3" href="javascript:void(0)" id="to-return" class="text-info"><p class="text-center"><b>Regresar</b></p> </a>
                        </form>
                    </div>
                </div>
            </div>
    </section>

</body>
<!-- <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script> -->
<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<!-- <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->

</html>
<script>
    $(function() {
        $(".preloader").fadeOut();
    });
    // $(function() {
    //     $('[data-toggle="tooltip"]').tooltip()
    // });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#form_session").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-return').on("click", function() {
        $("#recoverform").slideUp();
        $("#form_session").fadeIn();
    });
    $(document).ready(function() {
        $(document).on("click", ".showPassword", function() {
            let inputPassword = $(this).parent().find("input");
            if ($(inputPassword).val() != "") {
                if ($(inputPassword).prop("type") == "password") {
                    $(inputPassword).prop("type", "text");
                    $(this).html('<i class="fas fa-eye-slash"></i>');
                } else if ($(inputPassword).prop("type") == "text") {
                    $(inputPassword).prop("type", "password");
                    $(this).html('<i class="fas fa-eye"></i>');
                }
            }
        });

    });

    $(document).on("submit", "#form_session", function(event) {
        event.preventDefault();
        var formData = new FormData(event.target);
        formData.append("module", "Session");
        formData.append("controller", "Session");
        formData.append("nameFunction", "createSession");

        $.ajax({
            url: 'app/lib/ajax.php',
            method: $(this).attr('method'),
            dataType: 'JSON',
            data: formData,
            cache: false,
            processData: false,
            contentType: false
        }).done((res) => {
            if (res.typeAnswer == true) {
                // $(function notificationMeeting() {

                //     $.ajax({
                //         url: "app/lib/ajax.php",
                //         method: "post",
                //         data: {
                //             module: "Meeting",
                //             controller: "Meeting",
                //             nameFunction: "notificationMeeting",
                //             userId: $("#userId").val(),
                //         },
                //     }).done((res) => {
                //         alert(res.dias)
                // $("#notificaciones").text(res.dias);
                location.href = "web/pages";

                // $("#correo").html(res);
                //     });
                // });

            } else {
                swal({
                    title: "Usuario o Contraseña incorrectos",
                    type: "error"
                });
            }
        })
    });
</script>