    <div class="container-fluid">
        <div class="row">
            <div class="p-5 col-lg-4 mx-md-auto">
                <div class="login-card card ">
                    <div class="card-header">
                        <h3 class="card-title">Registrar</h3>
                    </div>

                    <div class="card-body">
                        <form id="form_register" action="" method="POST" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-label-group">
                                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Nombres" autofocus="autofocus">
                                                <!-- <label for="firstName">Primer name</label> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label-group">
                                                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Apellidos" >
                                                <!-- <label for="lastName">Last name</label> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <!-- <input type="email" class="form-control" placeholder="Email address" name="inputEmail" id="inputEmail" > -->
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email address" 
                                         data='<?= json_encode(array("typeNit" => "correo", "table" => "usuario", "field" => "correo")); ?>'>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="contraseña" name="password" id="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="verificar contraseña" name="passwordVerify" id="passwordVerify">
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Registrar">
                                <!-- <input type="button" class="btn btn-lg btn-primary btn-block" value="Registrar" onclick="$(location).attr('href','web/pages/index.html.php');"> -->

                            </fieldset>

                            <a href="javascript:window.history.back();">&laquo; Volver atrás</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
<script>
    $(document).ready(function() {
        $(document).on("submit", "#form_register", function(event) {
            event.preventDefault();

            var formData = new FormData(event.target);
            formData.append("module", "Session");
            formData.append("controller", "Session");
            formData.append("nameFunction", "registerUser");

            $.ajax({
                url: 'app/lib/ajax.php',
                method: $(this).attr('method'),
                dataType: 'JSON',
                data: formData,
                cache: false,
                processData: false,
                contentType: false
            }).done((res) => {
                // TODO: add the fields
                if (res.typeAnswer == "success") {
                    swal({
                        title: 'Registro Exitoso',
                        type: ' success'
                    })
                }
            })
        });
    });
</script>