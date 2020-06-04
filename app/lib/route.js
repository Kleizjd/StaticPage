
// INCLUIR SCRIPTS DE LAS VISTAS
$.getScript("../../routes/web.js");


// LLAMAR LA VISTA QUE SE CARGARA CON LOS DATOS 
function callView(module, controller, nameFunction, parameters, blank){
    // alert(" "+module+" / "+controller+" / "+nameFunction+" / "+parameters);
    $("#cargarVista").append(`
        <form id="Data${nameFunction}" action="./" method="post" ${blank ? `target="_blank"` : null}>
            <input type="hidden" name="module" value=${module}>
            <input type="hidden" name="controller" value=${controller}>
            <input type="hidden" name="nameFunction" value=${nameFunction}>
            ${parameters ? Object.keys(parameters).map(key => `<input type="hidden" name="${key}" value="${parameters[key]}">\n`).join("") : null}
        </form>
    `);
    $(`#Data${nameFunction}`).submit();
    $(`#Data${nameFunction}`).remove();
}

// $('.select2').select2({
//     width: "100%",
//     // dropdownParent: $('#maraton-program')
// });
