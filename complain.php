
<?php
session_start();
include ("db.php");
include ("headfile.html"); 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 

 		
 		$complain = $_POST['complain'];
 		$query = "INSERT INTO complain VALUES ('{complain}')";

 		$result = mysqli_query($conn,$query);
 		 if($result){
 		 	echo "Complain is Recorded" ;
 		 }else{
 		 	echo "failed" ;
 		 }


  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title> Complaint</title>
  </head>
  <body>

  		<form float="right" action="complain.php" method="post">
  			Make the Complain : <input type="text" name="complain">
  			<input type="submit" name="complain" value="Submit">
  			
  		</form>

  
  </body>
  </html>
<?php  include("footfile.html") ?>