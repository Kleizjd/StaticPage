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

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="p-5 col-lg-4 mx-md-auto">
                <div class="login-card card ">
                    <div class="card-header">
                        <div class="justify-content-center row">
                            <div class="col-10">
                                <h1>PsicoApp/ web</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="form_session" action="" method="POST" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Login" name="user" id="user" autofocus required>
                                </div>
                                <div class="input-group form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>

                                    <button type="button" class="btn btn-outline-primary showPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Ingresar">
                                <!-- <input type="button" class="btn btn-lg btn-primary btn-block" value="Ingresar" onclick="$(location).attr('href','web/pages/');"> -->
                                <!-- <input type="button" class="btn btn-lg btn-primary btn-block" value="Ingresar" onclick="$(location).attr('href','web/pages/modify.php');"> -->

                            </fieldset>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="?p=Session/Register">Crear Usuario</a>

                            <a class="d-block small mt-3  " href="views/Session/forgot-password.php">olvidaste la contrasena?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>

</html>
<script>
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