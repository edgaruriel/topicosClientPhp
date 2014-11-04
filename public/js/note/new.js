  	$(function(){  	
 		 $('#form').validate({
 		        rules: {
 		        'title': 'required',	        
 		        'id_type': 'required',
 		        'id_priority': 'required',
 		        'comment': 'required'
 		        },
 		    messages: {
 		    	'title': 'Campo obligatorio',	        
 		        'id_type': 'Campo obligatorio',
 		        'id_priority': 'Campo obligatorio',
 		        'comment': 'Campo obligatorio'
 		    },
 		    debug: true,
 		    submitHandler: function(form){
 		    	form.submit(); 		    
 		    } 
 		 });
  		
  	});