<?php include('header.php');?>
<!DOCTYPE html>
<html>
<title>Real Estate World</title>
<link rel="stylesheet" href="./css/first.css">
<style>
.mySlides {display0:none;
  width:1400px;
  height:400px;
  }
  h1{
	  color:green;
  }
  p{
	  color:blue;
  }
   body{
	   background-color:rgb(61, 18, 18);
	   height:500px;
   }
  input[name=Submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	
	border-radius: 10px
}
  #container{
	 height:270px;	
	  text-align:center;
  }
  
</style>
<body>

<div class="w3-content w3-section">
  <img class="mySlides w3-animate-left" src="./images/estate.jpg" >
  <img class="mySlides w3-animate-left" src="./images/pic1.jpg" >
  <img class="mySlides w3-animate-left" src="./images/pic2.jpg" >
  <img class="mySlides w3-animate-left" src="./images/pic3.jpg" >
  <img class="mySlides w3-animate-left" src="./images/pic3.jpg" >
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>

<div id="container">
    <h1><strong>Welcome to Real Estate World</strong></h1>
      <p>Plan your best deal here...!</p>
	 <a href="index.php">
		   <input type="button" name="Submit" value="Get Started">
		   </a>
	 </div>

</body>
<?php include('footer.php');?>
</html>
