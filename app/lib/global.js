///=============================[VALIDAR key PRIMARIA]=============================///
$(function validateKey(){
	$(document).on("keyup", "#validateKey", function () {
		let data = JSON.parse($(this).attr("data"));
		// alert("entra");
		if($("#validateKey").val()!=""){

			$.ajax({
				url: "app/lib/ajax.php",
				method: "post",
				dataType: "json",
				data: {
					module: "Utilities",
					controller: "Utilities",
					nameFunction: "validateKey",
					nit: $(this).val(),
					table: data.table,
					field: data.field,
				}
			}).done((res) => {
				if (res === true) {
					
					$(this)[0].setCustomValidity(`Ya existe este ${data.typeNit}`);
					
				} else {
					$(this)[0].setCustomValidity("");
				}
			});
		} 
	});
});
// ENCRIPTAR Y DECRIPTAR DATOS
function encriptar(dato){
	let encrypted = CryptoJS.AES.encrypt(JSON.stringify(dato), "", {format: CryptoJSAesJson}).toString();
	return encrypted;
}

function decriptar(dato){
	let decrypted = JSON.parse(CryptoJS.AES.decrypt(dato, "", {format: CryptoJSAesJson}).toString(CryptoJS.enc.Utf8));
	return decrypted;
}
$(document).on("change", ".subirArchivo", function (e) {

	// // <---- OBTENER EL NOMBRE DEL ARCHIVO ---->
	let archivo = e.target.files[0];
	let extensionArchivo = archivo.name.toLowerCase().substring(archivo.name.toLowerCase().lastIndexOf("."));
	let archivoSinDistintivo = $(this).parent().parent().find(".nombreArchivo").text().replace(/\-[^-]+$/g,"") + extensionArchivo;
	// <---- PREVISUALIZAR ARCHIVO ---->

	// Creamos el objeto de la clase FileReader
	let reader = new FileReader();
	// Leemos el archivo subido y se lo pasamos a nuestro fileReader
	reader.readAsDataURL(archivo);
	// Se válida si el archivo a subir no es igual al archivo subido
	if (archivo.name.toLowerCase() != archivoSinDistintivo.toLowerCase()) {
		// Le decimos que cuando este listo ejecute el código interno
		reader.onload = () => {
			// Subir el archivo automáticamente cuando se esta en edición
			if ($(this).attr("data-file-upload")) {

				$(this).parent().find(".ContenedorPrevisualizarArchivo").html("");

				let dataFile = decriptar($(this).attr("data-file-upload")).split("|"),
					tabla = dataFile[0],
					campo = $(this).prop("name"),
					valores = dataFile[1],
					ruta = dataFile[2];
					// alert("tabla: "+tabla)
					// alert("campo: "+campo)
					// alert("valores: "+valores)
					// alert("ruta: "+ruta)
					

				var formData = new FormData();
				formData.append("module", "Utilities");
				formData.append("controller", "Utilities");
				formData.append("nameFunction", "uploadFile");
				formData.append("Archivo", archivo);
				formData.append("Tabla", tabla);
				formData.append("Campo", campo);
				formData.append("Valores", valores);
				formData.append("Ruta", ruta);

				$.ajax({
					url: "../../app/lib/ajax.php",
					method: "post",
					data: formData,
					dataType: "json",
					processData: false,
					contentType: false
				}).done((res) => {
					if (res.typeAnswer == true) {
						let archivoSinExtension = res.archivo.substring(0, res.archivo.lastIndexOf("."));

						$(this).parent().parent().find(".nombreArchivo").text("Cargando..");
						$(this).parent().parent().find("label").find("img").prop({
							src: "../../public/img/gif/loader.gif",
							alt: "Cargando...",
							title: "Cargando..."
						});

						setTimeout(() => {
							$(this).parent().parent().find(".nombreArchivo").text(res.archivo);
							if ($(this).parent().parent().find(".borrarArchivo").length == 1) {
								let dataFileDelete = decriptar($(this).parent().parent().find(".borrarArchivo").attr("data-file-delete")).split("|");
								dataFileDelete = encriptar(`${res.archivo}|${dataFileDelete[1]}|${dataFileDelete[2]}|${dataFileDelete[3]}|${dataFileDelete[4]}`);
								$(this).parent().parent().find(".borrarArchivo").attr("data-file-delete", dataFileDelete);
							}
							$(this).parent().parent().find("label").find("img").prop({
								src: res.ruta,
								alt: archivoSinExtension,
								title: archivoSinExtension
							});
							$(this).parent().find(".ContenedorPrevisualizarArchivo").html(
								`<i class="text-primary fa fa-eye fa-2x previsualizarArchivo" style="cursor: pointer;" data-file=${encriptar(archivo.name + "|" + reader.result)} title="Ver archivo"></i>`
							);
						}, 2000);
					}
				});
			} else {
				// Previsualizar nombre y archivo cuando se esta en inserción
				$(this).parent().parent().find(".nombreArchivo").text(archivo.name);
				$(this).parent().parent().find(".ContenedorPrevisualizarArchivo").html(
					`<i class="text-primary fa fa-eye fa-2x previsualizarArchivo" style="cursor: pointer;" data-file='${encriptar(archivo.name + "|" + reader.result)}' title="Ver archivo"></i>`
				);
			}
		};
	}
});

// SCRIPT PARA BORRAR EL ARCHIVO
	$(document).on("click", ".borrarArchivo", function () {
		// Borrar el archivo cuando se esta en edición
		if ($(this).attr("data-file-delete")) {
			if ($(this).parent().parent().find(".nombreArchivo").text() != "Cargando..") {
				let dataFile = decriptar($(this).attr("data-file-delete")).split("|"),
					archivo = dataFile[0],
					tabla = dataFile[1],
					campo = dataFile[2],
					distintivo = dataFile[3],
					ruta = dataFile[4];

				var formData = new FormData();
				formData.append("Archivo", archivo);
				formData.append("Tabla", tabla);
				formData.append("Campo", campo);
				formData.append("Distintivo", distintivo);
				formData.append("Ruta", ruta);

				$.ajax({
					url: "ajax.php",
					method: "post",
					data: formData,
					dataType: "json",
					processData: false,
					contentType: false
				}).done((res) => {
					if (res.tipoRespuesta == true) {
						$(this).parent().parent().find(".subirArchivo").val("");
						$(this).parent().parent().find(".nombreArchivo").text("");
						$(this).parent().parent().find(".ContenedorPrevisualizarArchivo").html("");
					}
				});
			}
		} else {
			// Borrar el archivo cuando se esta en inserción
			$(this).parent().parent().find(".subirArchivo").val("");
			$(this).parent().parent().find(".nombreArchivo").text("");
			$(this).parent().parent().find(".ContenedorPrevisualizarArchivo").html("");
		}
	});
