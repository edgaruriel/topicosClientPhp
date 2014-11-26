$(document).ready(function() {


$('#form').validate({
	rules:{
		name: "required",
		lastName: "required",
		username: "required",
		email: {
			required: true,
			email: true
		},
		newpassword: "required",
		confirmpassword:{
			equalTo: '#newpassword'
		}
	},
	
	messages:{
		name: "Porfavor ingrese su nombre",
		lastName: "Porfavor ingrese su apellido",
		username: "Porfavor ingrese su nombre de usuario",
		email: {
			required: "Porfavor ingrese un email",
			email: "Ingrese un email v�lido"
		},
		newpassword: "Porfavor ingrese la nueva contrase�a",
		confirmpassword:{
			equalTo: 'No coincide la nueva contrase�a'
		}
	},
	
	submitHandler: function(form) {
		form.submit();
	}
});

});


function optionPassword(){
	if($('#changePass').is(':checked')){
		$('#changePassword').show();
	}else{
		$('#changePassword').hide();
	}
}

