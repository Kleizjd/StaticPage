<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Olvidaste la contrasena</title>

  <!-- Custom fonts for this template-->
  <script src="../../vendor/jquery/jquery.slim.min.js"></script>
  <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../vendor/fontawesome/css/all.min.css"  type="text/css">

  <link rel="stylesheet" href="../../vendor/sweetalert/css/sweetalert2.min.css">
  <!-- Custom styles for this template-->
  <!-- <link href="../../css/sb-admin.css" rel="stylesheet"> -->

</head>

<body class="bg-dark">
  <?php include_once "../../app/lib/ajax.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mx-md-auto">
        <div class="login-card card mt-5">
          <div class="card-header text-center">Restablecer Contrasena</div>
          <div class="card-body">
            <div class="text-center mb-4">
              <h4>Olvidaste tu contrasena?</h4>
              <p>Ingresa tu correo electronico y te enviaremos instrucciones para restablacer tu contrasena.</p>
            </div>
            <form method="POST" id="recoverAccount" action="">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="email_user" name="email_user" class="form-control" placeholder="Direccion de Correo Electronico" required autofocus="autofocus">
                  <label for="email_user">Direccion de Correo Electronico</label>
                </div>
              </div>
              <!-- <a class="btn btn-primary btn-block" href="login.html">Restablecer</a> -->
              <input type="submit" class="btn btn-primary btn-block" value="Restablecer">
            </form>
            <div class="text-center">
              <!-- 
              <a class="d-block small mt-3" href="Register.php">Crear una Cuenta</a> -->
              <a class="d-block small" href="javascript:window.history.back();">Pagina de Ingreso</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="../../app/lib/global.js"></script> -->
  <script src="../../vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<script>
  $(document).ready(function() {
    
        // $(function recoverPassword() {
        //   $(document).on("submit", "#recoverAccount", function(event) {
        //     event.preventDefault();
        //     alert("hey")
         

        //   });
        // });
          $(function recoverPassword() {
            $(document).on("submit", "#recoverAccount", function(event) {
              event.preventDefault();
              var formData = new FormData(event.target);

              formData.append('module', 'Session');
              formData.append('controller', 'Session');
              formData.append('nameFunction', 'recoverPassword');

              $.ajax({
                url: '../../app/lib/ajax.php',
                method: $(this).attr('method'),
                dataType: 'JSON',
                data: formData,
                cache: false,
                processData: false,
                contentType: false
              }).done((res) => {
                if(res.typeAnswer == true){
                  swal({
                    title: "Se ha enviado un correo a su bandeja de entrada. Por favor verifique su correo.",
                    text: res.link,
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                  });

                } else {
                  swal({ title: 'email invalido', type: 'warning',  });
                }

              })
            });
          });

        });
</script>