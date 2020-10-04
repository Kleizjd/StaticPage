<div class="card shadow-lg mt-2">
    <div class="card-header">
        <div class="container">
            <div class="row justify-content-md-center">
                <!-- <div class="col-sm-8 col-lg-8 col-ms-offset-8"> -->
                <div class="col-sm-4 ml-5">
                    <h4><b>Crear Reunion</b> </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="POST" id="form_reunion" method="POST" autocomplete="off">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <div class="row pb-3">
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary" title="Crear Reunion" onclick="this.form.reset();"><i class="fa fa-save"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-primary" id="SearchMeeting" title="Buscar"><i class="fa fa-search"></i> </button>

                            </div>
                            <div class="col-sm-1">
                                <button type="reset" class="btn btn-primary" id="reset" title="Limpiar"><i class="fa fa-file"></i> </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="fecha_reunion" class="label-control">Fecha</label>

                            <input type="text" name="fecha_reunion" id="fecha_reunion" class="form-control dateTime" placeholder="AÑO/MES/DIA HORA-MINUTO">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="titulo_reunion">Titulo</label>

                            <input type="text" name="titulo_reunion" id="titulo_reunion" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>

                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" cols="50" placeholder="Coloca tu descripcion aqui!"></textarea>
                            <!-- <input type="text" name="descripcion" id="descripcion" class="form-control"> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="modalSearchMeeting">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 70%;">
        <div class="modal-content">

            <div class="text-center bg-info modal-header">
                <h3 class="text-white w-100 modal-title">Búsqueda de Reunion</h3>
            </div>

            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<script>
</script>
<script>
    $(document).ready(function() {
        // MAterial Date picker    
        //  $('.dateTime').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date(), lang : 'es' });
        $('.dateTime').bootstrapMaterialDatePicker({
            format: 'YYYY/MM/DD HH:mm',
            minDate: new Date(),
            lang: 'es'
        });
        

        $(function BuscadorReunion() {
            $(document).on("click", "#SearchMeeting", function() {
                $.ajax({
                    url: "../../app/lib/ajax.php",
                    method: "post",
                    data: {
                        module: "Meeting",
                        controller: "Meeting",
                        nameFunction: "SearchMeeting",
                    }
                }).done((res) => {
                    $("#modalSearchMeeting .modal-body").html(res);
                    $("#modalSearchMeeting").modal();
                });
            });
        });

        $(document).on("submit", "#form_reunion", function() {
            event.preventDefault();
            if ($("#descripcion").val() && $("#fecha_reunion").val() && $("#titulo_reunion").val()) {
                var formData = new FormData(event.target);
                // TODO: add the fields

                formData.append('module', 'Meeting');
                formData.append('controller', 'Meeting');
                formData.append('nameFunction', 'CreateMeeting');

                $.ajax({
                    url: '../../app/lib/ajax.php',
                    method: $(this).attr('method'),
                    dataType: 'JSON',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false
                }).done((res) => {
                    if (res.typeAnswer == true) {
                        alertify.notify("Reunion Agendada", "success", 5);
                    }

                });

            } else {
                alertify.notify("llenar campos faltantes", "warning", 5);
            }
        });

    });
</script>