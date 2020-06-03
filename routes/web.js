$(document).ready(function () {
  //======================[  Search ANSWER  BY EMAIL ]=========================//
  $(function viewSearchEmail() {
    $(document).on("submit", "#form_searchEmail", function (event) {
      event.preventDefault();
      let correo = new Object();
      correo["correo"] = $("#correo").val();

      if ($("#correo").val() != "") {
        callView("Survey", "Survey", "getSurvey", correo);
      } else {
        swal({ title: "Ingrese por favor un dato ", type: "warning" });
      }
    });
  });

});
