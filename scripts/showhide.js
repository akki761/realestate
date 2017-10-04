function setVisibility() {
  if($('#Field31').val() == 'Self Finance'){
    
    $("fieldset").fadeOut();
  }
  else if( $('#Field31').val == 'select'){
	  $("fieldset").fadeOut();
  }
  else
	  $("fieldset").fadeIn();
  
}

function hidecon(){
	
	   $("fieldset").hide();
	//if( $('#Field31').val == 'select'){
	//$("fieldset").hide();}
}

