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
  
  $result= mysqli_query($con,"select * from business_leads where emp_id='".$_SESSION['empid']."';");
  
  }
  
  echo "<table border =1>";
	echo "<th>" . "lead_id" . "</th>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "first_name" . "</th>";
	echo "<th>" . "last_name" . "</th>";
	echo "<th>" . "address" . "</th>";
	echo "<th>" . "contact_no" . "</th>";
	echo "<th>" . "email" . "</th>";
	echo "<th>" . "marital_status" . "</th>";
	echo "<th>" . "property_type_needed" . "</th>";
	echo "<th>" . "ownership_type" . "</th>";
	echo "<th>" . "preferences" . "</th>";
	echo "<th>" . "date_of_registration" . "</th>";
	echo "<th>" . "rank" . "</th>";
	echo "<th>" . "final_status" . "</th>";
	echo "<th>" . "recommendation_id" . "</th>";
	
	
while ($row1=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row1 ['lead_id'] . "</td>";
	echo "<td>" . $row1 ['emp_id'] . "</td>";
	echo "<td>" . $row1 ['first_name'] . "</td>";
	echo "<td>" . $row1 ['last_name'] . "</td>";
	echo "<td>" . $row1 ['address'] . "</td>";
	echo "<td>" . $row1 ['contact_no'] . "</td>";
	echo "<td>" . $row1 ['email'] . "</td>";
	echo "<td>" . $row1 ['marital_status'] . "</td>";
	echo "<td>" . $row1 ['property_type_needed'] . "</td>";
	echo "<td>" . $row1 ['ownership_type'] . "</td>";
	echo "<td>" . $row1 ['preferences'] . "</td>";
	echo "<td>" . $row1 ['date_of_registration'] . "</td>";
	echo "<td>" . $row1 ['rank'] . "</td>";
	echo "<td>" . $row1 ['final_status'] . "</td>";
	echo "<td>" . $row1 ['recommendation_id'] . "</td>";
	
	echo"</tr>";
	}
	
	mysqli_close($con);

?>