
<?php include("data.php");?>
<?php
           $name="";
			$email="";
			$address1="";
			$address2="";
			$city="";
			$state="";
			$postal=""; 
			$country="";
			$phone="";
			$type="";
			$payment="";
			$bank="";
			if(isset($_POST['Field30']))
			{
				$type=$_POST['Field30'];
			}
            if(isset($_POST['Field31']))
			{
				$payment=$_POST['Field31'];
			}
		   if(isset($_POST['submit']))
		   {			   
	         
			$name= strip_tags(@$_POST['Field8']);
			$email= strip_tags(@$_POST['Field28']);
			$address1= strip_tags(@$_POST['Field16']);
			$address2= strip_tags(@$_POST['Field17']);
			$address= $address1 .",". $address2;
			$city= strip_tags(@$_POST['Field18']);
			$state= strip_tags(@$_POST['Field19']);
			$postal= strip_tags(@$_POST['Field20']);
			$country= strip_tags(@$_POST['Field21']);
		    $phone= strip_tags(@$_POST['Field29']);
			$bank= $_POST['Field132'];
		    $query= mysqli_query($conn,"Insert into user VALUES('','$name','$email','$address','$city','$state','$postal','$country','$phone','$payment','$type','$bank')");
			 
			 mysqli_close($conn);
            
		   }
  ?>
<!DOCTYPE html>
<html>
<head>

<title>
Real Estate World
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<style>
 body,html {
    background: url(./images/estate.jpg) no-repeat center fixed; 
    background-size: cover;
} 
 a{
	  text-decoration:none;
  }
 #header
  {
	  
	  background-color:black;
	  	
	  color:white;
     	  
	
  }
#text{
       margin-right: auto;
    padding-left: 134px;
    padding-top: 14px;
    font-size: -webkit-xxx-large;	 
}
#image,img
{
	border-radius:5px;
	margin-top:10px;
	margin-left:10px;
   float: left;	
} 
 input[name=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	
	border-radius: 10px
}
#sub{
	    margin-right: auto;
    padding-left: 0px;
    padding-top: 0px;
    font-size: x-large;
}
</style>
<link href="./css/structure.css" rel="stylesheet">
<link href="./css/form.css" rel="stylesheet">
<link href="./css/theme.css" rel="stylesheet">

<!-- JavaScript -->

<script>
function validate()
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
			document.getElementById("Field8").value="";
           b = false;
		   
		}
		
	var city=document.getElementById('Field18');
     	
		if(!regex.test(city.value))
		{
			 ci="City";
			 city.focus();
			 document.getElementById("Field18").value="";
          b= false;
		}
  
     var state=document.getElementById('Field19');
     	
		if(!regex.test(state.value))
		{
		    st="State";
			state.focus();
			document.getElementById("Field19").value="";
          b=false;
		}  
		 var postal=document.getElementById('Field20');
		   var regex2=/^[0-9]{6}$/;
		   if(!regex2.test(postal.value))
		   {
			    po="Postal number";
			   postal.focus();
			   document.getElementById("Field20").value="";
			   b=false;
		   }
	var mobile=document.getElementById('Field29');
	    var regex1=/^[1-9]{1}[0-9]{9}$/;
	    if(!regex1.test(mobile.value))
		{
			 mo="Mobile number";
			 mobile.focus();
			document.getElementById("Field29").value="";
			b=false;
		} 
		var msg="";
		if(name!=""){
		   msg=name+" cannot have numbers or special character\n";
		}
		if(ci!=""){
			msg=msg+ci+" cannot have numbers or special character\n";
		}
		if(st!=""){
		msg=msg+st+" cannot have numbers or special character\n";
			
		}
		if(po!=""){
		msg=msg+po+" must be numeric\n";
			
		}
		if(mo!=""){
		msg=msg+mo+" must be numeric\n";
	    }
		if(b==false)
		{
			alert(msg);
		}
	 return b;
		
}</script>
<script>
function setVisibility() {
  if($('#Field31').val() == 'select'){
    
    $("fieldset").fadeOut();
  }
  if( $('#Field31').val() == 'Self Finance'){
	  $("fieldset").fadeOut();
  }
  if($('#Field31').val()== 'Installment')
	  $("fieldset").fadeIn();
  
}

function hidecon(){
	
	   $("fieldset").hide();
	//if( $('#Field31').val == 'select'){
	//$("fieldset").hide();}
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</head>

<body id="public" onload="hidecon()">
<div>
   
</div>
<div id="container" class="ltr">

<header id="header" class="info">
<a href="index.php">

<div id="image"> <img src="./images/logo.png" alt="Real Estate"style="width:100px"></div>
<div id="text"><b>Real Estate World</b> 

</a>
<div id="sub">Place Where You Find Best Deal<div>
</div>
</header>

<form id="form2" name="form2" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="on" method="post" 
      action="index.php" onsubmit="return validate()">
  
 <div id="disp" >
 
  <?php 
  
  if(isset($_POST['submit']))
	  
	    include("display.php");?>
</div>

<ul>
<li id="foli7" class="notranslate      ">
<label class="desc" id="title7" for="Field7">
Name
<span id="req_7" class="req">*</span>
</label>

<span>
<input id="Field8" name="Field8" type="text" class="field text ln" value="" size="37" tabindex="2" placeholder="" required />

</span>
</li>
<br>
<li id="foli16" class="complex notranslate      ">
<label class="desc" id="title16" for="Field16">
Current Address
<span id="req_16" class="req">*</span>
</label>
<div>
<span class="full addr1">
<label for="Field16">Street Address</label>
<input id="Field16" name="Field16" type="text" class="field text addr" value="" tabindex="3" placeholder="" required       />

</span>
<span class="full addr2">
<label for="Field17">Address Line 2</label>
<input id="Field17" name="Field17" type="text" class="field text addr" value="" tabindex="4" placeholder="" />

</span>
<span class="left city">
<label for="Field18">City</label>
<input id="Field18" name="Field18" type="text" class="field text addr" value="" tabindex="5"    placeholder="" required />

</span>

<span class="right state">
<label for="Field19">State / Province / Region</label>
<input id="Field19" name="Field19" type="text" class="field text addr" value="" tabindex="6"    placeholder="" required />

</span>
<span class="left zip">
<label for="Field20">Postal / Zip Code</label>
<input id="Field20" name="Field20" type="text" class="field text addr" value="" maxlength="6" tabindex="7"    placeholder="" required />

</span>
<span class="right country">
<label for="Field21">Country</label>
<select id="Field21" name="Field21" class="field select addr" tabindex="8" >
<option value="" selected="selected"></option>
<option value="United States" >United States</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="Australia" >Australia</option>
<option value="Canada" >Canada</option>
<option value="France" >France</option>
<option value="New Zealand" >New Zealand</option>
<option value="India" >India</option>
<option value="Brazil" >Brazil</option>
<option value="----" >----</option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Åland Islands" >Åland Islands</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="American Samoa" >American Samoa</option>
<option value="Andorra" >Andorra</option>
<option value="Angola" >Angola</option>
<option value="Anguilla" >Anguilla</option>
<option value="Antarctica" >Antarctica</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Aruba" >Aruba</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bermuda" >Bermuda</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
<option value="Brunei Darussalam" >Brunei Darussalam</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Cayman Islands" >Cayman Islands</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Democratic Republic of the Congo" >Democratic Republic of the Congo</option>
<option value="Republic of the Congo" >Republic of the Congo</option>
<option value="Cook Islands" >Cook Islands</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="C&ocirc;te d'Ivoire" >C&ocirc;te d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Faroe Islands" >Faroe Islands</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Gibraltar" >Gibraltar</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="Curacao" >Curacao</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Palestine" >Palestine</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia" >Serbia</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Sint Maarten" >Sint Maarten</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United States Minor Outlying Islands" >United States Minor Outlying Islands</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Virgin Islands, British" >Virgin Islands, British</option>
<option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
</select>

</span>
</div>
</li>
<br>
<li id="foli28" class="notranslate      ">
<label class="desc" id="title28" for="Field28">
Email
<span id="req_28" class="req">*</span>
</label>
<div>
<input id="Field28" name="Field28" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="9"       placeholder="" required />
</div>
</li>
<br>
<li id="foli29" class="notranslate      ">
<label class="desc" id="title29" for="Field29">
Mobile Number
<span id="req_29" class="req">*</span>
</label>
<div>
<input id="Field29" class="field text medium" name="Field29" tabindex="10" required placeholder="" type="text" maxlength="10" value="" />
</div>
</li>
<br>
<li id="foli30" class="      ">
<label class="desc notranslate" id="title30" for="Field30">
Type of House
<span id="req_30" class="req">*</span>
</label>
<div>
<select id="Field30" name="Field30" class="field select small" tabindex="11" >
<option
value="--Select--" selected="selected">
<span class="notranslate">--Select--</span>
</option>
<option
value="1BHK" >
<span class="notranslate">1BHK</span>
</option>
<option
value="2BHK" >
<span class="notranslate">2BHK</span>
</option>
<option
value="3BHK" >
<span class="notranslate">3BHK</span>
</option>
<option
value="4BHK" >
<span class="notranslate">4BHK</span>
</option>
</select>
</div>
</li>
<br>
<li id="foli31" class="      ">
<label class="desc notranslate" id="title31" for="Field31">
Payment Mode
<span id="req_31" class="req">*</span>
</label>
<div>
<select id="Field31" name="Field31" class="field select small"  onchange="setVisibility()"     tabindex="12" >
<option value="select">
<span class="notranslate">--Select--</span>
</option>
<option
value="Self Finance" >
<span class="notranslate">Self Finance</span>
</option>
<option
value="Installment" >
<span class="notranslate">Installment</span>
</option>
</select>
</div>
</li>
<br>
<li id="foli132" class="     ">
<fieldset>
<legend id="title132" class="desc notranslate">
Bank
<span id="req_132" class="req"></span>
</legend>


<div>
  <input id="radioDefault_132" name="Field132" type="hidden" value="" />
    <span>
  <input id="Field132_0"     name="Field132"     type="radio"     class="field radio"     value="SBI"     tabindex="13"         onchange="handleRadioOther(this.name, false);"   />
  <label class="choice" for="Field132_0"     >
    <span class="choice__text notranslate">SBI</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
  <span>
  <input id="Field132_1"     name="Field132"     type="radio"     class="field radio"     value="PNB"     tabindex="14"         onchange="handleRadioOther(this.name, false);"                          />
  <label class="choice" for="Field132_1"     >
    <span class="choice__text notranslate">PNB</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
  <span>
  <input id="Field132_2"     name="Field132"     type="radio"     class="field radio"     value="HDFC"     tabindex="15"         onchange="handleRadioOther(this.name, true);"                         />
  <label class="choice" for="Field132_2"     >
    <span class="choice__text notranslate">HDFC</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
</div>
<br>
</fieldset>
</li>
 <li class="buttons ">
<div>

 <input type="submit" value="Submit" name="submit" />
  <input type="reset" value="Reset" name="reset"/>
  <br>

	
	
</div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="9wul3MewHgGtsRa0FOAh9v8r2S+uSFNDTIgsomyo/No=" />
</li>
</ul>
</form>
 

</div><!--container-->
<a href="#"
target="_blank"
style="font-size:85% !important;visibility:visible !important;display:inline !important;
background:none !important;border:none !important;color:blue !important;
text-indent:0 !important;text-decoration:underline !important;position:static !important;
margin:0 !important;padding:0 !important;overflow:none !important
width:auto !important;height:auto !important;">Report Abuse</a>
<a class="powertiny" href="first.php" title="Powered by Real Estate"
style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
<span style="background:url(./images/wufoo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
<b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed</b>
</a></body>

</html>
