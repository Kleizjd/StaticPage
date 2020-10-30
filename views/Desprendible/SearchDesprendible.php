<div class="card shadow-lg mt-2">
    <div class="card-header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4 ml-5">
                    <h4><b>Buscar desprendible</b> </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p>Empresa: </p>
                </div>
                <div class="col-sm">
                    <p> <b> DEPARTAMENTO ADMINISTRATIVO INSTITUCIONAL </b> </p>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-sm">
                    <label for="desde">Desde: </label>
                </div>
                <div class="col-sm">
                    <!-- <input type="text" name="desde" id="desde" class="form-control dateTime" placeholder="AÑO/MES/DIA"> -->
                    <div class="form-control-wrapper">
						<input type="text" id="date-format" class="form-control dateTime" placeholder="Begin Date Time">
					</div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-sm">
                    <label for="Hasta">Hasta: </label>
                </div>
                <div class="col-sm">
                    <input type="text" name="Hasta" id="Hasta" class="form-control dateTime" placeholder="AÑO/MES/DIA">
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-sm">
                    <label for="beneficiario">Beneficiario</label>
                </div>
                <div class="col-sm">
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control" placeholder="Todos los Conceptos">
                </div>
            </div>
      
            <div class="row pb-3">
                <div class="col-sm">
                    <div class="custom-control custom-radio">
                        <input id="devengos" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="devengos">Solo Devengos</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-radio">
                        <input id="deducciones" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="deducciones">Devengos y deducciones</label>
                    </div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-sm">
                    <label for="reporte">Tipo de Reporte: </label>
                </div>
                <div class="col-sm">
                    <input type="text" name="" id="" placeholder="Desprendibles de Nomina" class="form-control">
                </div>
                <div class="col-sm">
                    <button class="btn btn-primary" id="buscarDesprendible">Buscar<i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#date-format').bootstrapMaterialDatePicker({

            format: 'YYYY/MM/DD HH:mm',
            // format: 'YYYY/MM/DD',
            // format: 'HH:mm',
            // format: 'dddd DD MMMM YYYY - HH:mm',
            cancelText: 'Descartar',
            clearText: 'Limpar',
            // date: false,
            // time: false,
            // minDate: new Date(),
            lang: 'es'
        });

    });

</script>