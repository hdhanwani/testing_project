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

//echo $_POST['select1'] ;

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  mysqli_query($con,"update employees set first_name='".$_POST['firstname']."',last_name='".$_POST['lastname']."',address='".$_POST['address']."',
  contact_no='".$_POST['contact_no']."',email='".$_POST['email']."',dept_id='".$_POST['dept_id']."',position_id='".$_POST['position_id']."',
  joining_date='".$_POST['joining_date']."',basic_salary='".$_POST['basic_salary']."' where emp_id ='".$_POST['employeeID']."'");
  
  $result = mysqli_query($con,"select * from employees where emp_id ='".$_POST['employeeID']."';") ;
  
echo "<table border =1>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "first_name" . "</th>";
	echo "<th>" . "last_name" . "</th>";
	echo "<th>" . "address" . "</th>";
	echo "<th>" . "contact_no" . "</th>";
	echo "<th>" . "email" . "</th>";
	echo "<th>" . "dept_id" . "</th>";
	echo "<th>" . "position_id" . "</th>";
	echo "<th>" . "joining_date" . "</th>";
	echo "<th>" . "basic_salary" . "</th>";
	
while ($row=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row ['last_name'] . "</td>";
	echo "<td>" . $row ['address'] . "</td>";
	echo "<td>" . $row ['contact_no'] . "</td>";
	echo "<td>" . $row ['email'] . "</td>";
	echo "<td>" . $row ['dept_id'] . "</td>";
	echo "<td>" . $row ['position_id'] . "</td>";
	echo "<td>" . $row ['joining_date'] . "</td>";
	echo "<td>" . $row ['basic_salary'] . "</td>";
	
	echo"</tr>";
	}
	
	
  mysqli_close($con)	
  
  



?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	</head>

<body>
<br>
<br>
<H1>The employee information submitted after edit is:- </h1><br><br>
<a href ='lead_rep_manager_page_gui.php'><button> GO BACK TO MAIN PAGE </button></a> <br><br><br>


</body>
</html>


