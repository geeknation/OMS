//process the create user data from
$("#action").click(function() {
	var direction = $(this).attr("name");
	// console.log($("input[type=password]"));
	if (direction == "create-user-btn") {

		var roleNotChosen = '';
		var emptyFields = '';
		var emptyTextCounter = 0;
		var emptyFile = 0;
		var OptionNotGiven;
		var CheckboxNotSelected = 0;
		//process the crete user form
		$(".create-user-form").find("input[type=text]").each(function() {
			if ($(this).val() == "") {
				// $(this).parent(".form-group").find("label").html()
				$(this).parent(".form-group").addClass("has-error");
				emptyFields += 1;
			}

		});

		$(".create-user-form").find("input[type=password]").each(function() {
			if ($(this).val() == "") {
				$(this).parent(".form-group").addClass("has-error");
				// $(this).parent(".form-group").find("label").html()
				emptyFields += 1;

			}
		});
		$(".create-user-form").find("input[type=select]").each(function() {
			if ($(this).val() == "Select Employee Role") {
				$(this).parent(".form-group").addClass("has-error");
				// $(this).parent(".form-group").find("label").html()
				OptionNotGiven += 1;
			}
		});

		if (emptyFields >= 1 || OptionNotGiven >= 1 || CheckboxNotSelected >= 1) {
			$("div.user-msg>p").html("Please fill in all the fields and Choose the required option");
		} else {
			//check are matching
			var passwords = $("input[type=password]");
			if ($("#password").val() !== $("#confirm_password").val()) {
				window.alert("not matching");
			}

			$.post("app.php", {
				firstname : $("#first_name").val(),
				other_names : $("#other_names").val(),
				phonenumber : $("#phone_number").val(),
				email : $("#email_address").val(),
				idnumber : $("#id_number").val(),
				employee_role : $("#employee_role").val(),
				username : $("#username").val(),
				password : $("#password").val(),
				residence : $("#residence").val(),
				req : "create-staff-user"
			}, function(data) {
				console.log(data);
				window.alert(data);
			});
		}

	}

});

function loadUsers() {
	$.ajax({
		url : "app.php?req=fetch-all-users",
		dataType : "json",
		type : "GET",
		success : function(json) {
			console.log(json);
			dataTable = $('#data-content').columns({
				data : json,
				schema : [{
					"header" : "First Name",
					"key" : "first_name"
				}, {
					"header" : "Other Names",
					"key" : "other_names"
				}, {
					"header" : "Email",
					"key" : "email_address"
				}, {
					"header" : "Role",
					"key" : "role"
				}, {
					"header" : "Residence",
					"key" : "residence"
				}]

			});
		}
	});

	$.get('app.php', {
		req : "fetch-all-users"
	}, function(json) {

	}, "json");
}

