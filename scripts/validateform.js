function validate()// focus vala check krna h aur validation during form fillibg bhi kr k dekhna h aur baar baar   na aae sb ka eksaath aae
{
	var b= true;
	var name="";
	var ci="";
	var st="";
	var po="";
	var mo="";
	var n=document.getElementById('Field8');
	var regex = /^[a-zA-Z ]{2,30}$/;
		if(!regex.test(n.value))
		{
			 name="Name";
			n.focus();
			
           b = false;
		   
		}
		
	var city=document.getElementById('Field18');
     	
		if(!regex.test(city.value))
		{
			 ci="City";
			 city.focus();
          b= false;
		}
  
     var state=document.getElementById('Field19');
     	
		if(!regex.test(state.value))
		{
		    st="State";
			state.focus();
          b=false;
		}  
		 var postal=document.getElementById('Field20');
		   var regex2=/^[0-9]{6}$/;
		   if(!regex2.test(postal.value))
		   {
			    po="Postal number";
			   postal.focus();
			   postal.val="";
			   b=false;
		   }
	var mobile=document.getElementById('Field29');
	    var regex1=/^[1-9]{1}[0-9]{9}$/;
	    if(!regex1.test(mobile.value))
		{
			 mo="Mobile number";
			mobile.focus();
			b=false;
		} 
		var msg="";
		if(name!=""){
		   msg=name+"cannot have numbers or special character\n";
		}
		if(ci!=""){
			msg=msg+ci+"cannot have numbers or special character\n";
		}
		if(st!=""){
		msg=msg+st+"cannot have numbers or special character\n";
			
		}
		if(po!=""){
		msg=msg+po+"must be numeric\n";
			
		}
		if(mo!=""){
		msg=msg+mo+"must be numeric\n";
	    }
		if(b==false)
		{
			alert(msg);
		}
	 return b;
		
}