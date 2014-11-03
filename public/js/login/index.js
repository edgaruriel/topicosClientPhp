  	$(function(){  		
 		 $('#form').validate({
 		        rules: {
 		        'password': 'required',	        
 		        'username': 'required'
 		        },
 		    messages: {
 		        'password': 'Campo obligatorio',
 		        'username': 'Campo obligatorio'
 		    },
 		    debug: true,
 		    submitHandler: function(form){
 		    	form.submit(); 		    
 		    } 
 		 });
  		
  	});