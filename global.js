function validate(count){
	var done=true;
	var group=$('input.form-control-'+count+':visible,textarea.form-control-'+count+':visible,select.form-control-'+count+':visible',form);
	for(var i=0;i<group.length;i++){
		if(group[i].nodeName=='INPUT'){
			if(group[i].value==''){ 
				$(group[i]).addClass('is-invalid');
				alert("please enter "+group[i].name);
				group[i].focus();
				done=false;
			}
			else{
				$(group[i]).removeClass('is-invalid');
				$(group[i]).addClass('is-valid');
			}
			if(group[i].size == 20){
				group[i].size=50;
			}
			if(group[i].value.length>group[i].size){
				$(group[i]).addClass('is-invalid');
				//console.log('Maximum '+group[i].size+' characters allowed');
				alert("max size for "+group[i].name+" is :"+group[i].size);
				group[i].focus();
				done=false;
			}
			if(group[i].type=='password'){
				if(group[i].value.trim()==''){
					alert('Please enter password');
					$(group[i]).addClass('is-invalid');
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}
			if(group[i].name=='name' ) {  
				if(group[i].value.trim()==''){
					alert('Please enter name');
					$(group[i]).addClass('is-invalid');
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}
			else if(group[i].type=='email'){
				if(!/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(group[i].value)){
					alert('Please enter valid email');
					$(group[i]).addClass('is-invalid');
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}else if(group[i].type=='radio'){
				if(form[group[i].name].value==''){
					$(group[i]).addClass('is-invalid');
					alert('Please Select '+group[i].placeholder);
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}
			else if(group[i].name=='company_website'){
				if(!/(^|\s)((https?:\/\/)?[\w-]+(\.[\w-]+)+\.?(:\d+)?(\/\S*)?)/gi.test(group[i].value)){
					$(group[i]).addClass('is-invalid');
					alert('Please enter valid company website');

					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}else if(group[i].name=='id'){
				if(group[i].length > 20 || (!/(^[a-z][a-z0-9\-]+[a-z0-9]$)/.test(group[i].value))){
					$(group[i]).addClass('is-invalid');
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}else if(group[i].type=='checkbox'){
				var val=[];
				$('input[name='+group[i].name+']').each(function(){
					if(this.checked)
						val.push(this.value);
				});
				if(val.length==0){
					$(group[i]).addClass('is-invalid');
					alert('Please select '+group[i].placeholder);
					group[i].focus();
					done=false;
				}else{
					$(group[i]).removeClass('is-invalid');
					$(group[i]).addClass('is-valid');
				}
			}
		}
		else if(group[i].nodeName=='TEXTAREA'){
			if(group[i].value==''){ 
				$(group[i]).addClass('is-invalid');
				alert("please enter "+group[i].name);
				group[i].focus();
				done=false;
			}
			else{
				$(group[i]).removeClass('is-invalid');
				$(group[i]).addClass('is-valid');
			}
		}
		else{
			if(group[i].value=='' || /\bselect\b/i.test(group[i].value)){
				$(group[i]).addClass('is-invalid');
				alert('Please Select '+group[i].value.replace(/\bselect\b\s*/i,''));
				group[i].focus();
				done=false;
			}else{
				$(group[i]).removeClass('is-invalid');
				$(group[i]).addClass('is-valid');
			}
		}
		if(done==false)break;
	}
	return done;
}