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
  
  $query = "select * from tasks ;";


$result=mysqli_query($con,"$query") or die("Error: ".mysqli_error($con));

   
  echo "<table border =1>";
    
    echo "<th>" . "Task_id" . "</th>";
	echo "<th>" . "Task_title" . "</th>";
	echo "<th>" . "Task_description" . "</th>";
	echo "<th>" . "Emp_id" . "</th>";
	echo "<th>" . "Mangers emp id" . "</th>";
	echo "<th>" . "Final_Status" . "</th>";
	echo "<th>" . "Date_of_assigning" . "</th>";

  
  
while ($row = mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row ['task_id'] . "</td>";
	echo "<td>" . $row ['task_title'] . "</td>";
	echo "<td>" . $row ['task_description'] . "</td>";
    echo "<td>" . $row ['emp_id'] . "</td>";
    echo "<td>" . $row ['mangers_emp_id'] . "</td>";	
	echo "<td>" . $row ['final_status'] . "</td>";
	echo "<td>" . $row ['date_of_assigning'] . "</td>";
	
	
	echo"</tr>";
	
 	}
	echo "</table>" ;
    
	 
	
	mysqli_close($con);
   




?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	</head>
 <body>
 </body>
</html>