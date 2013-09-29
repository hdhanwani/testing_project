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
  
  $result= mysqli_query($con,"select employees.emp_id,employee_performance.in_year_2013 from employees,employee_performance where employees.emp_id='".$_SESSION['empid']."' 
  and employees.emp_id=employee_performance.emp_id ;"); //$order by emp_id desc limit 1";
  //$query= mysqli_query($con,$sql);
  //$row=mysqli_fetch_row($query);
  //$empid=$row[0];
  // $in_year_2013=$row[1];

 }
 
 echo "<table border =1>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "Registrarion_in_year_2013" . "</th>";
	
while ($row1=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row1 ['emp_id'] . "</td>";
	echo "<td>" . $row1 ['in_year_2013'] . "</td>";
	
	echo"</tr>";
	}
	
	mysqli_close($con);


?>