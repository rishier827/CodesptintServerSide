<?php
include("db.php"); 

$pagename="Admin Dashboard"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page



if(isset($_POST['vehicalId'])){
	$vehicalRemove = $_POST['vehicalId'];			
	$SQLRemove="DELETE FROM product WHERE prodId = '$vehicalRemove'";

	mysqli_query($conn, $SQLRemove) or die (mysqli_error());
	
	
	$SQL="select prodId, prodName, prodPicNameSmall , prodDescripShort , prodPrice from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=checkVehical.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200></a>";

echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
echo "<p><h6>".$arrayp['prodDescripShort']."</h6>"; //display product des as contained in the array
echo "<p><h5>£".$arrayp['prodPrice']."</h5>"; //display product name as contained in the array

echo "</td>";
echo "</tr>";
}
echo "</table>";
include ("footfile.html");
echo "</body>";
	 
}else{
	
$SQL="select prodId, prodName, prodPicNameSmall , prodDescripShort , prodPrice from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=checkVehical.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200></a>";

echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
echo "<p><h6>".$arrayp['prodDescripShort']."</h6>"; //display product des as contained in the array
echo "<p><h5>£".$arrayp['prodPrice']."</h5>"; //display product name as contained in the array

echo "</td>";
echo "</tr>";
}
echo "</table>";
include ("footfile.html");
echo "</body>";
	
}



?>