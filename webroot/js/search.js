$(document).ready (function () {

	$("#search_users").click (function () {

		var nrn = $("#nrn").val();

		if (nrn == "")
			$("#search_form").attr("action", "/pages/searchlist");
		else
			$("#search_form").attr("action", "/user/unapprove");
		
		$("#search_form").submit();
	});

});