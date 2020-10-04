<div class="card shadow-lg">
	<div class="card-body">
		<form id="formBuscadorReunion" autocomplete="off">
			<div class="form-body">
				<div class="align-items-center row">
					<div class="col-10">
						<div class="row">
							<div class="col-sm">
								<div class="example">
									<h5 class="box-title m-t-30">Fecha</h5>
									<input type="text" class="form-control input-daterange-timepicker" name="daterange"  />
								</div>

								<!-- <div class="form-group">
									<label for="fecha" class="control-label">Fecha</label>
									<input type="date" name="fecha" id="fecha" class="form-control">
								</div> -->
							</div>
						</div>
					</div>

					<div class="col-2">
						<div class="justify-content-end row">
							<div class="col-4">
								<button type="submit" class="btn btn-info" id="btnListarReunion" title="Buscar">
									<i class="fa fa-search"></i>
								</button>
							</div>

							<div class="col-4">
								<button type="reset" class="btn btn-info" id="btnNuevaBusqueda" title="Nueva búsqueda">
									<i class="fa fa-file"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="nuevaBusqueda" id="containerTablaReunion" style="display: none;">
		<table id="tablaReunion" class="table table-bordered table-hover">
			<thead class="text-white bg-info thead-info">
				<tr>
					<th>fecha</th>
					<th>Titulo</th>
					<th>Descripcion</th>
				</tr>
			</thead>

			<tbody></tbody>

		</table>
	</div>
</div>
<script>
	$(document).ready(function() {
		
		$('.input-daterange-timepicker').daterangepicker({
			// timePicker: true,
			startDate: moment().startOf('hour'),
			// endDate: moment().startOf('hour').add(32, 'hour'),
			// format: 'MM/DD/YYYY h:mm A',
			format: 'MM/DD/YYYY',
			// timePickerIncrement: 30,
			// timePicker12Hour: true,
			// timePickerSeconds: false,
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-danger',
			cancelClass: 'btn-inverse'
		});

	});
</script>