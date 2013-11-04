<?php
session_start();

if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . " This is your Profile "; 
 echo "<br>"."<br>";
}




else 
{
 header ('location:http://localhost/testing_project/index.html');
}

 $con =mysqli_connect("localhost","root","3rdmarch","real_estate");
 
 if(mysqli_connect_errno($con))
{
 echo "failed to connect to mysql:" .mysqli_connect_error();
 }
 
 else
 {
  mysqli_query($con,"INSERT INTO tasks (task_title, task_description ,emp_id,mangers_emp_id,final_status,date_of_assigning)
  VALUES ('$_POST[task_title]','$_POST[task_description]','$_POST[emp_id7]','$_POST[mangers_emp_id]','$_POST[final_status1]','$_POST[doa]')");
  }


$result = mysqli_query($con,"select * from tasks order by task_id desc limit 1");
echo "<table border =1>";
	echo "<th>" . "task_id" . "</th>";
	echo "<th>" . "task_title" . "</th>";
	echo "<th>" . "task_description" . "</th>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "mangers_emp_id" . "</th>";
	echo "<th>" . "final_status" . "</th>";
	echo "<th>" . "date_of_assigning" . "</th>";
	
while ($row=mysqli_fetch_array($result))
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
  
  mysqli_close($con)

?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	</head>

<body>
<br><br>
<h1> The Task Information You have submitted is:- </h1>
<br><br>
<a href ="lead_rep_manager_page_gui.php"><button> Go back to main page </button></a><br><br>
</body>
</html>  

