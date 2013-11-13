<?php

session_start();

if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . "Your Employee ID is".$_SESSION['empid']." And This is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  else
  {
  
  $result= mysqli_query($con,"select * from projects;");
  
  }
  
  echo "<table border =1>";
	echo "<th>" . "project_id" . "</th>";
	echo "<th>" . "project_name" . "</th>";
	echo "<th>" . "project_description" . "</th>";
	echo "<th>" . "project_type" . "</th>";
	
	
while ($row1=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row1 ['project_id'] . "</td>";
	echo "<td>" . $row1 ['project_name'] . "</td>";
	echo "<td>" . $row1 ['project_description'] . "</td>";
	echo "<td>" . $row1 ['project_type'] . "</td>";
	
	echo"</tr>";
	}
	
	mysqli_close($con);

?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	</head>
 <body>
 </body>
</html>