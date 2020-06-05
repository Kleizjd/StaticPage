
<?php @session_start(); 
// $formulario = basename( __FILE__ ); 
// $usu_perfil = $_SESSION["user_role"]; ?>
<div class="card shadow-lg">
    <div class="card-header">
        <form id="frm_UploadImage" method="POST">

            <?php foreach ($Admin as $admin) {} ?>

            <div class="row">
                <div class="text-center col-12">
                    <div class="font-weight-bold" style="font-size: 18px;"><?= $_SESSION['Nombre_Completo']; ?><span id="nombreEmpleado"></span></div>
                    <input type="hidden" name="userID" id="userID" value="<?= $_SESSION['user_id']; ?>">
                </div>
            </div><!-- IMAGE ADMIN -->
                <div class="row">
                    <div class="col-12">
                        
                        <label for="imagen_usuario" class="d-flex justify-content-center">
                            <div class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">
                                <i class="far fa-edit img__description">Cambiar</i>
                                <?php if (!empty($admin["imagen_usuario"])) : ?>
                                    <img class="" src="<?= $ruta . $admin["imagen_usuario"]; ?>" alt="<?= preg_replace("/\.[^.]+$/", "", $admin["imagen_usuario"]); ?>" height="190" width="190">
                                    <i class="far fa-edit img__description">Cambiar</i>
                                    <i class="shadow-hover-efect"></i>
                                <?php else : ?>
                                    <img class="img__img" src="../../public/img/svg/upload-user.svg" />
                                    <i class="shadow-hover-efect"></i>
                                    <i class="far fa-edit img__description">Cambiar</i>
                                <?php endif; ?>
                            </div>
                        </label>
                    </div>
                    <div class="text-center col-12">
                        <div class="nombreArchivo"><?= $admin["imagen_usuario"]; ?></div>
                        <div class="ContenedorPrevisualizarArchivo"></div>
                        <input type="file" class="subirArchivo" name="imagen_usuario" id="imagen_usuario" accept="image/png, image/jpeg" style="display: none;" data-file-upload="<?=encriptar("usuario|".$admin["correo"]."|$ruta"); ?>">

                    </div>
                </div>
          
            <!-- <input class="btn btn-primary" type="submit" value="Subir Imagen"> -->
        </form>
    </div>
    <div class="card-body">
        <form action="" method="post" id="form_Edit_Password">
            <div class="row pt-3">
                <div class="col-sm"><label for="email_user">Correo Electronico</label></div>
                <div class="col-sm"><input type="email" name="email_user" id="email_user" class="form-control"></div>
            </div>
            <div class="row pt-3">
                <div class="col-sm"><label for="password_actual">Actual Contrase&ntilde;a</label></div>
                <div class="col-sm"><input type="text" name="password_actual" id="password_actual" class="form-control"></div>
            </div>
            <div class="row pt-3">
                <div class="col-sm"><label for="password"></label>Nueva Contrase&ntilde;a</div>
                <div class="col-sm"><input type="text" name="password" id="password" class="form-control"></div>
            </div>
            <div class="row pt-3">
                <div class="col-sm"><label for="confirm_password"></label>Confirmar Contrase&ntilde;a</div>
                <div class="col-sm"><input type="text" name="confirm_password" id="password" class="form-control"></div>
            </div>
            <div class="row pt-3">
                <div class="col-sm d-flex justify-content-center">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- MODAL PREVISUALIZAR ARCHIVO -->
<div class="modal fade" id="modalPrevisualizarArchivo">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="text-center col-12">
                            <img src="" alt="" title="" height="400" width="500" id="previsualizarImagenModal" style="display: none;">
                            <iframe src="" height="400" width="500" id="previsualizarArchivoModal" style="display: none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
