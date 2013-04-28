$( document ).ready(function() {
	$("#SU-sub").on("click", function(event){
		var passwords = $("[type=password]")
		console.log(passwords.first().val());
		if (passwords.first().val() != passwords.eq(1).val()){
			alert("passwords do not match");
			return false;
		}else if($("[name=email]").first().val().indexOf('@') == -1 ){
			alert("not valid email");
			return false;
		}else if(passwords.first().val() == "" || passwords.eq(1).val() == "" || $("[name=email]").first().val() == "") {
			alert("missing field");
			return false;
		}else{
			return true;
		}
	});
});