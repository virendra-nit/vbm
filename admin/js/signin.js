$(document).ready(function(){
	$("#username").focus();
	var validator = $("#frmSignIn").validate({
		errorElement:'div',
		rules: {
			admin_username: {
				required: true,
				nowhitespace: true
			},
			admin_password: {
				required: true,
				nowhitespace: true,
				minlength: 6,
				maxlength: 20
			}
		},
		messages: {
			admin_username: {
				required: "Please enter username."
			},	
			admin_password: {
				required: "Please enter password.",
				minlength: $.format("Enter at least {0} characters"),
				maxlength: $.format("Enter at most {0} characters")
			}
		}
	});
	$.validator.addMethod("nowhitespace", function(value, element) {
    	return this.optional(element) || /^\S+$/i.test(value);
	}, "Blank space not allowed");
});