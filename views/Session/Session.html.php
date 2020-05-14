<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PsicoApp/web</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist//css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/fontawesome/css/all.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="vendor/sweetalert/css/sweetalert2.min.css"> -->
    <!-- <link rel="shortcut icon" href="public/img/favicon/logo.png" type="image/x-icon"> -->
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
                                    <input type="text" class="form-control" placeholder="Login" name="user" autofocus required>
                                </div>
                                <div class="input-group form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" require>

                                    <button type="button" class="btn btn-outline-primary showPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <!-- <input type="submit" class="btn btn-lg btn-primary btn-block" value="Ingresar" > -->
                                <input type="button" class="btn btn-lg btn-primary btn-block" value="Ingresar" onclick="$(location).attr('href','../../web/pages/index.html');">

                            </fieldset>
                        </form>
                        <div class="text-center">
                        <a  class="d-block small mt-3" href="Register.html">Crear Usuario</a>

                        <a class="d-block small mt-3  " href="forgot-password.html">olvidaste la contrasena?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../vendor/jquery/jquery-3.5.0.min.js"></script>
<!-- <script src="vendor/sweetalert/js/sweetalert2.min.js"></script> -->
<!-- <script src="public/js/login.js"></script> -->

</html>
<script>
$(document).ready(function () {
	$(document).on("click", ".showPassword", function () {
		let inputPassword = $(this).parent().find("input");
		if ($(inputPassword).val() != "") {
			if ($(inputPassword).prop("type") == "password") {
				$(inputPassword).prop("type", "text");
				$(this).html('<i class="fas fa-eye-slash"></i>');
			}else if($(inputPassword).prop("type") == "text"){
				$(inputPassword).prop("type", "password");
				$(this).html('<i class="fas fa-eye"></i>');
			}
		}
	});
 
});
</script>