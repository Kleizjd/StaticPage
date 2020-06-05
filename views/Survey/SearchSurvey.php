
<div class="card shadow-lg ">
    <div class="card-header">
        <h4>Producto</h4>
    </div>
    <div class="card-body">
        <form action="" id="frm_Product" method="POST" autocomplete="off">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <div class="row pb-3">
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary" title="Crear Producto" onclick="this.form.reset();"><i class="fa fa-save"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-primary" id="Search" title="Buscar"><i class="fa fa-search"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="reset" class="btn btn-primary" id="reset" title="Limpiar"><i class="fa fa-file"></i> </button>
                            </div>
                        </div>
                        <?php foreach ($searchEmail as $userEmail) : ?>
                            <div class="mb-3">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-12 col-lg-12">

                                        <label for="numberOne"> <?= $userEmail["id_pregunta"]; ?>. <?= $userEmail["texto_pregunta"]; ?></label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12" >
                                        <!-- <div class="input-group"> -->
                                            <label class="form-control"> <?= $userEmail["respuesta"]; ?></label>
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
