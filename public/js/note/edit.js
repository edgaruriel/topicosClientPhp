  	$(function(){  	
 		 $('#form').validate({
 		        rules: {
 		        'title': 'required',	        
 		        'id_type': 'required',
 		        'id_priority': 'required',
 		        'note': 'required'
 		        },
 		    messages: {
 		    	'title': 'Campo obligatorio',	        
 		        'id_type': 'Campo obligatorio',
 		        'id_priority': 'Campo obligatorio',
 		        'note': 'Campo obligatorio'
 		    },
 		    debug: true,
 		    submitHandler: function(form){
 		    	form.submit(); 		    
 		    } 
 		 });
 		 
 		$('#datePicker').datetimepicker({
 			startDate: new Date(),
 			language: 'es',
 			pickDate: true,
 			format: 'dd/MM/yyyy',
 			autoclose: true,
 			startView: 2,
 			minView: 2
 		});
 		
 		$('#datePicker').datetimepicker("update", $("#dateField").val());
  		
  	});