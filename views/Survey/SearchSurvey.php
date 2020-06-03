<!-- <style>
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
</style> -->
<!-- <div class="container"> -->
<div class="row justify-content-md-center">
    <!-- <div class="col-sm-8 col-lg-8 col-ms-offset-8"> -->
    <div class="col-sm-4 ml-5">
        <h4><strong>Respuestas Paciente: </strong> </h4>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="mb-3">

            <h4><?= $name['Nombre_Completo'] ?></h4>
        </div>
    </div>
</div>
<?php foreach ($searchEmail as $userEmail) : ?>

    <div class="row justify-content-md-center">
        <div class="col-sm-8 col-lg-8">
            <div class="mb-3">
                <label for="numberOne">1. <?= $userEmail["texto_pregunta"]; ?></label>
                <div class="input-group">
                    <input type="text" class="form-control" value="<?= $userEmail["respuesta"]; ?>" disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        this question is required.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- <hr class="mb-4"> -->
<!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar respuestas</button> -->
<!-- </div> -->