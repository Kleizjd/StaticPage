
// INCLUIR SCRIPTS DE LAS VISTAS
$.getScript("../../views/open-views.js");


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