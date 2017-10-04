
 <?php
         $conn= mysqli_connect("localhost","root","");
if(mysqli_connect_error()){
	die("Connection failed: .$conn->connect_error");
}

mysqli_select_db($conn,"real");?>
		 