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
			email: "Ingrese un email válido"
		},
		newpassword: "Porfavor ingrese la nueva contraseña",
		confirmpassword:{
			equalTo: 'No coincide la nueva contraseña'
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

