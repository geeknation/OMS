jQuery(document).ready(function($) {
	
	//load the create staff user modal data
	$("#create-user").click(function() {
		var modal = $(".modal");
		$(".modal").modal();
		modal.find(".modal-body").load("modals-UI/create-user.php");
		modal.find(".modal-title").html("New Staff User");
		modal.find(".flag").val("");
		$("#action").text("Create").attr("name","create-user-btn");
	});
}); 