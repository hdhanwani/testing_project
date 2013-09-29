<?php
session_start();

if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] ."Your Employee Id is". $_SESSION ['empid']. " This is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

$con = mysqli_connect("localhost","root","3rdmarch","real_estate");

if(mysqli_connect_errno($con))
{
 echo "failed to connect to mysql:" .mysqli_connect_error();
 }
 
 else
 {
  mysqli_query($con,"insert into business_leads(emp_id,first_name,last_name,address,contact_no,email,marital_status,property_type_needed,ownership_type,
  preferences,date_of_registration,rank,final_status )
  values('$_POST[emp_id1]','$_POST[firstname1]','$_POST[lastname1]','$_POST[address1]','$_POST[contact_no1]','$_POST[email1]',
  '$_POST[marital_status]','$_POST[property_type]','$_POST[ownership_type]','$_POST[preferences]','$_POST[dor]','$_POST[rank]','$_POST[final_status]')");
  
 }

//this result used to print which lead data is entered , this data is echoed at the bottom of this page
$result = mysqli_query($con,"select * from business_leads order by lead_id desc limit 1;");


$sql= "select in_year_2013 from employee_performance where emp_id='".$_SESSION['empid']."';";
//$sql= "select in_year_2013 from employee_performance where emp_id=1;";
$query= mysqli_query($con,$sql);
$row1=mysqli_fetch_row($query);
$performance =$row1[0];
//echo $performance;

$performance=$performance + 1 ;
//$sql2="update employee_performance set in_year_2013 ='".$performance."' where emp_id='".$_SESSION['empid']."';";
//$query2=mysqli_query($con,$sql);
$res2=mysqli_query($con,"update employee_performance set in_year_2013 ='".$performance."' where emp_id='".$_SESSION['empid']."';");
  


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
	
while ($row=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row ['lead_id'] . "</td>";
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row ['last_name'] . "</td>";
	echo "<td>" . $row ['address'] . "</td>";
	echo "<td>" . $row ['contact_no'] . "</td>";
	echo "<td>" . $row ['email'] . "</td>";
	echo "<td>" . $row ['marital_status'] . "</td>";
	echo "<td>" . $row ['property_type_needed'] . "</td>";
	echo "<td>" . $row ['ownership_type'] . "</td>";
	echo "<td>" . $row ['preferences'] . "</td>";
	echo "<td>" . $row ['date_of_registration'] . "</td>";
	echo "<td>" . $row ['rank'] . "</td>";
	echo "<td>" . $row ['final_status'] . "</td>";
	
	echo"</tr>";
	}
	
	
  mysqli_close($con)	




?>

<html>
	<body>
	<br><br>
	<h1>This Business Lead Information has been stored to the database</h1><br><br>
	<a href="lead_rep_pg.php">Go back to main page </a>
</html>
</body>