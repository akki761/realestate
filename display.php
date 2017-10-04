<?php include("data.php");?>
<!doctype html>
<html>
<head>
  <style>
     header{
		     box-shadow: inset 2px 3px 9px 0px black;
   
    background-color: rgba(0,0,0,0.1);
	padding-left:10px;
	 }
	 #disp:focus{
		 background-color:red;
	 }
	 h1{
		 text-align:center;
	 }
	 hr{
		 border-top: 1px dotted #CCCCCC;
	 }
	 input[name=pdf]{
    background-color: cyan;
    border: none;
    color: black;
    
    text-decoration: none;
   
    cursor: pointer;
	border-radius: 10px
}
	 
	 
  </style>
</head>
<body>
<header id="disp">
<h1>YOUR SUBMISSION</h1>
<b>Name</b>:

<?php echo $name; ?><br>
<b>Email</b>: <?php echo $email;?>
<br>
<b>Address</b>: <?php echo $address;?>  
<?php if($address2!="")
	  echo ",";
  ?>
<br>
<?php echo $city.",";?>

<?php echo $state.",".$postal; ?>
<br>
<?php echo $country."."; ?>
<br>
<b>Mobile</b>: <?php echo $phone;?><br>
<b>Type of house</b>: <?php echo $type; ?>
<br>
<b>Payment mode</b>: <?php echo $payment; ?>
<br>
<b>Cost</b>: &#x20b9;<?php $co=mysqli_query($conn,"SELECT coat from houses where hname='$type'");
                   $cost=mysqli_fetch_assoc($co);
				   echo $cost['coat'];?>
				   
<?php 
if($payment=="Installment"){
echo"	
<br>
<b>Bank</b>: $bank
<br>
<b>Interst</b>: ";

$result= mysqli_query($conn,"Select interest from banks where bname='$bank'");
    $interest=mysqli_fetch_assoc($result);
echo $interest['interest']."%";

}
?>
<br>
<b>Details</b>: <?php $de=mysqli_query($conn,"SELECT hinfo from houses where hname='$type'");
                   $details=mysqli_fetch_assoc($de);
				   echo $details['hinfo'];?>
  
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="mypdf.php" target="_blank"><input type="button" name="pdf" value="View pdf"></a>
  <br>
 </header>
 <hr>
 </body>
 </html>