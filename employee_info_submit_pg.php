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
  mysqli_query($con,"INSERT INTO employees (first_name, last_name ,address,contact_no,email,dept_id,position_id,joining_date,basic_salary)
  VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[address]','$_POST[contact_no]','$_POST[email]','$_POST[dept_id]','$_POST[position_id]',
  '$_POST[joining_date]','$_POST[basic_salary]')");
  
  $sql="select emp_id from employees order by emp_id desc limit 1";
  $query= mysqli_query($con,$sql);
  $row=mysqli_fetch_row($query);
  $empid=$row[0];
  $res=mysqli_query($con,"insert into employee_performance (emp_id,in_year_2013,in_year_2014,in_year_2015)
  values('$empid','','','')");
  }
  
$result = mysqli_query($con,"select * from employees order by emp_id desc limit 1;");
echo "<table align='center' border='1'>";
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
	<br><br>
	<h1>This information has been stored to the database</h1><br><br>
	<h2>Click The link below to enter login info of this employee</h2>
	<p><a href="enter_login_info_of_employee_pg.php"> <button>Enter Login Information</button> </a></p>
	</html>
	</body>
	
	