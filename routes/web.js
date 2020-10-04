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
  //======================[  Acount  ]=========================//	
	$(function viewAcount() {
		$(document).on("click", "#viewAcount", function () {
		// $("#userID").val()
		// $(this).attr("userId")
		let userId = new Object();
		 userId["userId"] = $("#userId").val();
			callView("Admin", "Admin", "viewAcount", userId);	
		});
	});
  //======================[  Meeting  ]=========================//	
	$(function viewAcount() {
		$(document).on("click", "#viewCreateMeeting", function () {
      // alert('ehr')
			callView("Meeting", "Meeting", "viewCreateMeeting");	
		});
	});

});
