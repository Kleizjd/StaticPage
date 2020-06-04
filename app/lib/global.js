///=============================[VALIDAR key PRIMARIA]=============================///
$(function validateKey(){
	$(document).on("keyup", "#inputEmail", function () {
		let data = JSON.parse($(this).attr("data"));
		// alert("entra");
		if($("#inputEmail").val()!=""){

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
