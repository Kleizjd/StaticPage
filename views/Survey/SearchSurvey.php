<div class="card shadow-lg mt-2">
    <div class="card-header">
        <div class="container">
        <div class="row justify-content-md-center">
            <!-- <div class="col-sm-8 col-lg-8 col-ms-offset-8"> -->
            <div class="col-sm-4 ml-5">
                <h4><strong>Respuestas Paciente: </strong> </h4>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <div class="mb-3">

                    <h4><?= $name['nombre_completo'] ?></h4>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" id="frm_Product" method="POST" autocomplete="off">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <!-- <div class="row pb-3">
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary" title="Crear Producto" onclick="this.form.reset();"><i class="fa fa-save"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-primary" id="Search" title="Buscar"><i class="fa fa-search"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="reset" class="btn btn-primary" id="reset" title="Limpiar"><i class="fa fa-file"></i> </button>
                            </div>
                        </div> -->
                        <?php foreach ($searchEmail as $userEmail) : ?>
                            <div class="mb-3">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-12 col-lg-12">

                                        <label for="numberOne"> <?= $userEmail["id_pregunta"]; ?>. <?= $userEmail["texto_pregunta"]; ?></label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <!-- <div class="input-group"> -->
                                        <label class="border" style="font-weight: bold;"> <?= $userEmail["respuesta"]; ?></label>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>