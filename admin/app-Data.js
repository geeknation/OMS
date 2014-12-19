//process the create user data from
$("#action").click(function() {
	var direction=$(this).attr("name");
	// console.log($("input[type=password]"));
	if(direction=="create-user-btn"){
		
		
		var roleNotChosen='';
		var emptyFields='';
		var emptyTextCounter=0;
		var emptyFile=0;
		var OptionNotGiven;
		var CheckboxNotSelected=0;
		//process the crete user form
		$(".create-user-form").find("input[type=text]").each(function(){
			if($(this).val()==""){
				// $(this).parent(".form-group").find("label").html()
				$(this).parent(".form-group").addClass("has-error");
				emptyFields+=1;
			}
			
			
		});
		
		$(".create-user-form").find("input[type=password]").each(function(){
			if($(this).val()==""){
				$(this).parent(".form-group").addClass("has-error");
				// $(this).parent(".form-group").find("label").html()
				emptyFields+=1;
				
			}
		});
		$(".create-user-form").find("input[type=select]").each(function(){
			if($(this).val()=="Select Employee Role"){
				$(this).parent(".form-group").addClass("has-error");
				// $(this).parent(".form-group").find("label").html()
				OptionNotGiven+=1;
			}
		});
		
		if(emptyFields>=1 || OptionNotGiven>=1 || CheckboxNotSelected>=1){
			$("div.user-msg>p").html("Please fill in all the fields and Choose the required option");
		}
		else{
			//check are matching
			var passwords=$("input[type=password]");
			if($("#password").val()!==$("#confirm_password").val()){
				window.alert("not matching");
			}
		}

		
		
	}
	
});
